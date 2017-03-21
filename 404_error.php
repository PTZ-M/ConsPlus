  <style>
	img.bg {
	          /* Set rules to fill background */
	          min-height: 100%;
	          min-width: 100%;

	          /* Set up proportionate scaling */
	          width: 100%;
	          height: 100%;

	          /* Set up positioning */
	          position: fixed;
	          top: 0;
	          left: 0;
	}

	@media screen and (max-width: 100%) { /* Specific to this particular image */
	          img.bg {
	                  left: 50%;
	                  margin-left: -50%;   /* 50% */
	          }
	}
  </style>
  <body>
    <img class="bg" src="/404_error.jpg">
  </body>