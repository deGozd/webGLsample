<body onload="webGlStart();">
  <canvas id="lesson01-canvas" style="border:none;" width="500" height="500"></canvas>
</body>
<script>

  var triangleVertexPositionBuffer;
  var squareVertextPositionBuffer;

  function initBuffers() {
    triangleVertexPositionBuffer = gl.createBuffer();
    gl.bindBuffer(gl.ARRAY_BUFFER, triangleVertexPositionBuffer);
    
    var vertices = [
      0.0, 1.0, 0.0,
      -1.0, -1.0, 0.0,
      1.0, -1.0, 0.0
    ]
    
    gl.bufferData(gl.ARRAY_BUFFER, new Float32Array(vertices), gl.STATIC_DRAW);
    
    triangleVertexPositionBuffer.itemSize = 3;
    triangleVertexPositionBuffer.numItems = 3;
  }

  function webGlStart() {
    var canvas = document.getElementById("lesson01-canvas");
    initGl(canvas);
    initShaders();
    initBuffers();
    
    gl.clearColor(0.0, 0.0, 0.0, 1.0);
    gl.enable(gl.DEPTH_TEST);
    
    drawScene();
  }

</script>