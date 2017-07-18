<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<script>
(function() {
	$('.dropdown-button').dropdown({
    	inDuration: 300,
    	outDuration: 225,
      	constrainWidth: false, // Does not change width of dropdown to that of the activator
      	hover: true, // Activate on hover
      	gutter: 0, // Spacing from edge
      	belowOrigin: false, // Displays dropdown below the button
      	alignment: 'left', // Displays dropdown with edge aligned to the left of button
      	stopPropagation: false // Stops event propagation
	});
})();
</script>
</body>
</html>