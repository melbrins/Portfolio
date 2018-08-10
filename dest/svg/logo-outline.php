<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 192 133.2" style="enable-background:new 0 0 192 133.2;" xml:space="preserve" width="40%" height="40%">
	<style type="text/css">
		.st0, .st1{fill:none;stroke:#000;stroke-width:0.5;stroke-miterlimit:10;}
	</style>

	<defs>
		<style type="text/css">
			.st0{
				stroke-dasharray: 1000;
				stroke-dashoffset: 0;
				fill: none;
				-webkit-animation: dash 4s linear forwards;
				-moz-animation: dash 4s linear forwards;
				-o-animation: dash 4s linear forwards;
				animation: dash 4s linear forwards;
			}

			.st1{
				width: 100%;
				height: 100%;
				fill: rgba(0,0,0,0);
				stroke: rgba(0,0,0,0);
			}

			@-webkit-keyframes dash {
				0% {
					stroke-dashoffset: 1000;
					fill: rgba(0,0,0,0);
				}

				80%{
					fill: rgba(0,0,0,0);
					stroke-dashoffset: 0;
				}

				100%{

					fill: rgba(0,0,0,1);
				}
			}
		</style>
	</defs>

	<g>
		<circle id="circle" class="st1" cx="49.4" cy="73.7" r="12.8"/>


		<path class="st0" d="M141.2,26c-0.7,0-1.3,0-2,0.1l15.5-22.3L150.7,1l-68,97.8C75.3,108.1,63.8,114,51,114
			c-22.2,0-40.3-18-40.3-40.3c0-22.2,18-40.3,40.3-40.3c13.6,0,25.7,6.8,33,17.2l8.7-3.3c-8.7-13.8-24.1-23-41.7-23
			c-27.3,0-49.3,22.1-49.3,49.3C1.6,101,23.7,123,51,123c6,0,11.6-1.1,16.9-3l-6.3,9l3.9,2.7l28.7-41.3c6.4,19.8,25,34.1,46.9,34.1
			c27.3,0,49.3-22.1,49.3-49.3C190.5,48.1,168.4,26,141.2,26z M141.2,115.6c-20.5,0-37.4-15.3-39.9-35.1l30.9-44.4c2.9-0.7,5.9-1,9-1
			c22.2,0,40.3,18,40.3,40.3C181.5,97.5,163.4,115.6,141.2,115.6z"/>
		</g>
		
		<!-- SCALE DOWN -->
		<animate 
			xlink:href="#circle" 
			attributeName="r" 
			from="50" 
			to="12.8" 
			dur="0.2s" 
			begin="4s" 
			values="50; 12.8" 
			keyTimes="0; 1" 
			fill="freeze" 
		/>

		<!--  FILL CIRCLE -->
		<animate 
			xlink:href="#circle" 
			attributeName="fill" 
			from="0" 
			to="1" 
			dur="0.2s" 
			begin="4s" 
			values="rgba(0,0,0,0); rgba(0,0,0,1)" 
			keyTimes="0; 1" 
			fill="freeze" 
		/>
	</svg>