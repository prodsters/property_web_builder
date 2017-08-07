(function($) {
  $.fn.gauge = function(value, options) {
    return this.each(function() {

      var settings = $.extend({
        min: 0,
        max: 100,
        unit: "%",
        color: "#5bb510",
        colorAlpha: 1,
        bgcolor: "#dadada",
        type: "default"
      }, options);

      //canvas initialization
      var ctx = this.getContext("2d");

      var W = this.width;
      var H = this.height;
      var centerW = (W/2);

      var position = 0;
      var new_position = 0;
      var difference = 0;

      var text;
      var animation_loop, redraw_loop;

      // Angle in radians = angle in degrees * PI / 180
      function radians(degrees) {
        return degrees * Math.PI / 180;
      }

      if (settings.type === "default") {
        (function() {
          function update() {
            ctx.clearRect(0, 0, W, H);

            // The gauge will be an arc
            ctx.beginPath();
            ctx.strokeStyle = settings.bgcolor;
            ctx.lineWidth = W*0.13;
            ctx.arc(centerW, H - (centerW - ctx.lineWidth), (centerW) - ctx.lineWidth, radians(135), radians(45), false);
            ctx.stroke();

            ctx.beginPath();
            ctx.strokeStyle = settings.color;
            ctx.lineWidth = W*0.13;

            if (position > 0) {
              ctx.globalAlpha = settings.colorAlpha;
              ctx.arc(centerW, H - (centerW - ctx.lineWidth), (centerW) - ctx.lineWidth, radians(135), radians(135 + position), false);
              ctx.stroke();
              ctx.globalAlpha = 1;
            }

            // Add the text
            ctx.fillStyle = settings.color;
						var fontArgs = ctx.font.split(' ');
						ctx.font = (W*0.6) + ' ' + fontArgs[fontArgs.length - 1];
            text = value + settings.unit;
            // Center the text, deducting half of text width from position x
            text_width = ctx.measureText(text).width;
            ctx.fillText(text, centerW - text_width / 2, H - (centerW - ctx.lineWidth) + 15);
          }

          function draw() {
            // Cancel any animation if a new chart is requested
            if (typeof animation_loop !== undefined) clearInterval(animation_loop);

            new_position = Math.round((value / (settings.max - settings.min)) * 270);
            difference = new_position - position;
            animation_loop = setInterval(animate_to, 100 / difference);
          }

          // Make the chart move to new degrees
          function animate_to() {
            // Clear animation loop if degrees reaches the new_degrees
            if (position == new_position)
              clearInterval(animation_loop);

            if (position < new_position)
              position++;
            else
              position--;

            update();
          }

          draw();
        })();
      }

      if (settings.type === "halfcircle") {
        (function() {
          function update() {
            ctx.clearRect(0, 0, W, H);

            // The gauge will be an arc
            ctx.beginPath();
            ctx.strokeStyle = settings.bgcolor;
            ctx.lineWidth = W * 0.13;
            ctx.arc(centerW, H, (centerW) - ctx.lineWidth, radians(180), radians(0), false);
            ctx.stroke();

            ctx.beginPath();
            ctx.strokeStyle = settings.color;
            ctx.lineWidth = W * 0.13;

            if (position > 0) {
              ctx.arc(centerW, H, (centerW) - ctx.lineWidth, radians(180), radians(180 + position), false);
              ctx.stroke();
            }

            // Add the text
            ctx.fillStyle = settings.color;
						var fontArgs = ctx.font.split(' ');
						ctx.font = (W*4) + ' ' + fontArgs[fontArgs.length - 1];
            text = value + settings.unit;
            // Center the text, deducting half of text width from position x
            text_width = ctx.measureText(text).width;
            ctx.fillText(text, centerW - text_width / 2, H - 10);
          }

          function draw() {
            // Cancel any animation if a new chart is requested
            if (typeof animation_loop !== undefined) clearInterval(animation_loop);

            new_position = Math.round((value / (settings.max - settings.min)) * 180);
            difference = new_position - position;
            animation_loop = setInterval(animate_to, 2000 / difference);
          }

          // Make the chart move to new degrees
          function animate_to() {
            // Clear animation loop if degrees reaches the new_degrees
            if (position == new_position)
              clearInterval(animation_loop);

            if (position < new_position)
              position++;
            else
              position--;

            update();
          }
          draw();
        })();
      }
    });
  };
})(jQuery);
