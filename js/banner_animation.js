var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");

ctx.fillStyle = 'white';
ctx.font = '100px sans-serif';
ctx.fillText('KEK\nAgency', 10, 100);

var imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
var data = imageData.data;

var points = [];

for (var i = 0; i < data.length; i += 4) {
    if (data[i+3] > 128) {
        var x = (i / 4) % canvas.width;
        var y = Math.floor((i / 4) / canvas.width);
        points.push({
            x: x,
            y: y,
            vx: (Math.random() - 0.5) * 2,
            vy: (Math.random() - 0.5) * 2,
            draw: function() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, 2, 0, Math.PI * 2);
                ctx.fill();
            }
        });
    }
}

ctx.clearRect(0, 0, canvas.width, canvas.height);

function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    for (var i = 0; i < points.length; i++) {
        var p = points[i];
        p.x += p.vx;
        p.y += p.vy;
        if (p.x < 0 || p.x > canvas.width) p.vx = -p.vx;
        if (p.y < 0 || p.y > canvas.height) p.vy = -p.vy;
        p.draw();
    }
    requestAnimationFrame(animate);
}

canvas.addEventListener('mousemove', function(e) {
    var mouseX = e.clientX - canvas.offsetLeft;
    var mouseY = e.clientY - canvas.offsetTop;
    for (var i = 0; i < points.length; i++) {
        var p = points[i];
        var dx = p.x - mouseX;
        var dy = p.y - mouseY;
        var dist = Math.sqrt(dx*dx + dy*dy);
        if (dist < 50) {
            var angle = Math.atan2(dy, dx);
            p.vx = Math.cos(angle) * 2;
            p.vy = Math.sin(angle) * 2;
        }
    }
});

animate();


