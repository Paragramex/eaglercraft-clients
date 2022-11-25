<div class="footer">
 <marquee scrollamount="15" > <p><?php if (file_exists($path.'/db/site.json')) {
			$name = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars_decode($name->footer);} ?></p></marquee>
</div>
<script src="/assets/clipboard.min.js"></script>
<script>

	// clipboard.js
	
 var clipboard = new ClipboardJS('.copyme');

      clipboard.on('success', function (e) {
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
      });

      clipboard.on('error', function (e) {
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
      });


	
</script>
</body>
</html>