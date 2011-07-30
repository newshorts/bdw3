mikeCodeContext: new Object,
				mikeCodeImage:  new Object,
				mikeCodeImgData: new Object,
				mikeCodePix: new Object,
				setCanvas: function () {
					Constants.controls.canvas.mikeCodeContext = document.getElementById("mike-code-canvas").getContext("2d");
					Constants.controls.canvas.mikeCodeImage = document.getElementById("mike-code-img");
					Constants.controls.canvas.mikeCodeImgData = Constants.controls.canvas.mikeCodeContext.getImageData(0, 0, 485, 223);
					Constants.controls.canvas.mikeCodePix = Constants.controls.canvas.mikeCodeImgData.data;
					
				},
				alterCanvas: function (color) {
	/* 					color = color || 255; */
	/* 					var mikeCodeContext = document.getElementById("mike-code-canvas").getContext("2d"); */
	/* 					var mikeCodeContext = mikeCodeCanvas */
	/* 					var mikeCodeImage = document.getElementById("mike-code-img"); */
					
					// draw the image
					Constants.controls.canvas.mikeCodeContext.drawImage(Constants.controls.canvas.mikeCodeImage, 0, 0);
					
	/* 					var mikeCodeImgData = mikeCodeContext.getImageData(0, 0, 485, 223); */
	/* 					var mikeCodePix = mikeCodeImgData.data; */
					for (var i = 0, n = Constants.controls.canvas.mikeCodePix.length; i < n; i += 4) {
						Constants.controls.canvas.mikeCodePix[i] = color; 	// red
						Constants.controls.canvas.mikeCodePix[i+1] = color; 	// green
						Constants.controls.canvas.mikeCodePix[i+2] = color; 	// blue
			
					}
					
					Constants.controls.canvas.mikeCodeContext.putImageData(Constants.controls.canvas.mikeCodePix, 0, 0);
					
					console.debug(Constants.controls.canvas.mikeCodeContext + ", " + Constants.controls.canvas.mikeCodeImage + ", " + Constants.controls.canvas.mikeCodeImgData + ", " + Constants.controls.canvas.mikeCodePix);
					console.debug("end");