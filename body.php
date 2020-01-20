<body>
<h1>Raad de kleur...</h1>
  <div class="circle" <?= (!$start && $correct ? "id=\"".$randomKleur['id']."\"" : "") ?>><span>?</span></div>
  <?php 
	if (!$start) {
		if ($correct) {
			echo "<div class=\"knop\">CORRECT GERADEN!</div>";
		} else {
			echo "<div class=\"knop\">FOUTIEF GERADEN!</div>";
	    }
	}
  ?>
  <form method="POST">
	<input type="hidden" name="random" value="<?= $randomKleur['nr'] ?>">
    <div class="circle">
      <select name="kleur" id="ROOD" onchange="this.setAttribute('id', this.options[this.selectedIndex].value)">
        <option id="ROOD">ROOD</option>
        <option id="GROEN">GROEN</option>
        <option id="BLAUW">BLAUW</option>
      </select>
	</div>
    <div class="knop">
      <input type="submit" value="Raad" name="raad">
    </div>      
  </form>
</div>	
</body>