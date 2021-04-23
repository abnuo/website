<form action="/vgmconv.php">
  <label for="i">Convert VGM</label><br>
  <input type="hidden" id="i" name="i" value="<?php echo basename( $_FILES["fileToUpload"]["name"]); ?>"><br>
  <label for="lname">From:</label><br>
  <select name="f" id="f">
      <option value="ay8910">ay8910 (General Instrument AY-3-8910)</option>
      <option value="sn76489">sn76489 (Texas Instruments SN76489)</option>
      <option value="ym2413">ym2413 (OPLL)</option>
      <option value="ym2203">ym2203 (OPN)</option>
      <option value="ym2608">ym2608 (OPNA)</option>
      <option value="ym2612">ym2612 (OPN2)</option>
  </select><br><br>
  <select name="t" id="t">
      <option value="ay8910">ay8910 (General Instrument AY-3-8910)</option>
      <option value="sn76489">sn76489 (Texas Instruments SN76489)</option>
      <option value="ym2413">ym2413 (OPLL)</option>
      <option value="ym2203">ym2203 (OPN)</option>
      <option value="ym2608">ym2608 (OPNA)</option>
      <option value="ym3812">ym3812 (OPL2)</option>
      <option value="ym3526">ym3526 (OPL)</option>
      <option value="ymf262">ymf262 (OPL3)</option>
      <option value="y8950">y8950 (MSX-Audio)</option>
  </select><br><br>
  <input type="submit" value="Submit">
</form>
