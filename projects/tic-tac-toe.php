<?php 
	if(__FILE__ != $_SERVER['SCRIPT_FILENAME']) {
		echo "<!DOCTYPE html>\n";
		echo "<title>Tic-Tac-Toe</title>\n";
	}
?>
<div id="ticTT">
	<style type="text/css" scoped>
		#ticTT-canvas {
			border: 1px solid;
			display: block;
			margin: 0 auto;	
			background-color: white;
		}
		#ticTT {
			width: 400px;
			margin: 0 auto;
			background: #E2E3E4;
		 	-moz-border-radius: 10px;
		    -webkit-border-radius: 10px;
		    border-radius: 10px;
			padding: 10px;
		}
	</style>
	<canvas id="ticTT-canvas" width=400 height=400>
	    <p>Your browser doesn’t currently support HTML5 Canvas. 
	    Please check caniuse.com/#feat=canvas for information on 
	    browser support for canvas.</p>
     </canvas>
</div>
<script type="text/javascript">var TTT=function(l){function n(l){var n=h.getBoundingClientRect(),t=l.clientX-n.left,o=l.clientY-n.top;e(Math.floor(t/(T/3)),Math.floor(o/(T/3)))}function e(l,n){k&&(k=!1,u()),null==P[l+3*n]&&(P[l+3*n]=g,g?r(l,n):i(l,n),o(),k||(g=!g,t(),o(),g=!g))}function t(){var l=c(P,g);P[l]=g,g?r(l%3,Math.floor(l/3)):i(l%3,Math.floor(l/3))}function o(){if(P[0]==g&&P[1]==g&&P[2]==g||P[3]==g&&P[4]==g&&P[5]==g||P[6]==g&&P[7]==g&&P[8]==g||P[0]==g&&P[3]==g&&P[6]==g||P[1]==g&&P[4]==g&&P[7]==g||P[2]==g&&P[5]==g&&P[8]==g||P[0]==g&&P[4]==g&&P[8]==g||P[6]==g&&P[4]==g&&P[2]==g){var l=g?"O's":"X's";a(l+" wins.")}-1==P.indexOf(null)&&a("It's a draw.")}function r(l,n){v.strokeStyle="red",v.beginPath(),v.arc(l*T/3+T/6,n*T/3+T/6,T/3/2-b,0,2*Math.PI),v.stroke(),v.closePath()}function i(l,n){v.strokeStyle="blue",v.beginPath(),v.moveTo(l*T/3+b,n*T/3+b),v.lineTo((l+1)*T/3-b,(n+1)*T/3-b),v.stroke(),v.closePath(),v.beginPath(),v.moveTo(l*T/3+b,(n+1)*T/3-b),v.lineTo((l+1)*T/3-b,n*T/3+b),v.stroke(),v.closePath()}function u(){v.clearRect(0,0,T,T),v.strokeStyle="black",v.beginPath(),v.moveTo(T/3,0),v.lineTo(T/3,T),v.stroke(),v.closePath(),v.beginPath(),v.moveTo(2*T/3,0),v.lineTo(2*T/3,T),v.stroke(),v.closePath(),v.beginPath(),v.moveTo(0,T/3),v.lineTo(T,T/3),v.stroke(),v.closePath(),v.beginPath(),v.moveTo(0,2*T/3),v.lineTo(T,2*T/3),v.stroke(),v.closePath()}function a(l){P=[null,null,null,null,null,null,null,null,null],k=!0,v.font=.15*T+"px Sans-Serif",void 0==l?(u(),v.textAlign="center",v.fillText("Click to play.",T/2,T/2)):(v.textAlign="center",v.fillText(l,T/2,T/2))}function c(l,n){return f(l,!0,n,Number.MIN_SAFE_INTEGER,Number.MAX_SAFE_INTEGER)[1]}function f(l,n,e,t,o){var r=-1,i=s(l,e);if(null!=i)return[i,r];if(n){for(var u=Number.MIN_SAFE_INTEGER,a=0;a<l.length;a++)if(null==l[a]){var c=l.slice();c[a]=e;var h=f(c,!1,e,t,o)[0];if(h>u&&(u=h,r=a),t=Math.max(t,h),t>=o)break}return[u,r]}for(var u=Number.MAX_SAFE_INTEGER,a=0;a<l.length;a++)if(null==l[a]){var c=l.slice();c[a]=!e;var h=f(c,!0,e,t,o)[0];if(u>h&&(u=h,r=a),o=Math.min(o,h),t>=o)break}return[u,r]}function s(l,n){if(l[0]==n&&l[1]==n&&l[2]==n||l[3]==n&&l[4]==n&&l[5]==n||l[6]==n&&l[7]==n&&l[8]==n||l[0]==n&&l[3]==n&&l[6]==n||l[1]==n&&l[4]==n&&l[7]==n||l[2]==n&&l[5]==n&&l[8]==n||l[0]==n&&l[4]==n&&l[8]==n||l[6]==n&&l[4]==n&&l[2]==n)return 1;var e=!n;return l[0]==e&&l[1]==e&&l[2]==e||l[3]==e&&l[4]==e&&l[5]==e||l[6]==e&&l[7]==e&&l[8]==e||l[0]==e&&l[3]==e&&l[6]==e||l[1]==e&&l[4]==e&&l[7]==e||l[2]==e&&l[5]==e&&l[8]==e||l[0]==e&&l[4]==e&&l[8]==e||l[6]==e&&l[4]==e&&l[2]==e?-1:-1==l.indexOf(null)?0:null}var h=l.getElementById("ticTT-canvas"),v=h.getContext("2d");h.addEventListener("click",n);var T=h.width,b=T/90,g=!0,k=!0,P=[null,null,null,null,null,null,null,null,null];a()}(document);</script>