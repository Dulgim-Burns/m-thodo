<!-- ./php/index.php -->

<html>
    <head>
        <title>Hello World</title>
    </head>

    <body>
      <main>

        <form action="form.php" method="post">
          <div class="entree">
            <label for="valeur">valeur</label>
            <input type="text" name="valeur">
            <select name="unite">
              <optgroup>
                <option value="metre">Mètre</option>
                <option value="deci">Décimètre</option>
                <option value="centi">Centimètre</option>
                <option value="milli">Millimètre</option>
              </optgroup>
            </select>

          </div>

          <div>
            Convertie en
          </div>

          <div>
            <select name="convert">
              <optgroup>
                <option value="metre">Mètre</option>
                <option value="deci">Décimètre</option>
                <option value="centi">Centimètre</option>
                <option value="milli">Millimètre</option>
              </optgroup>
            </select>
          </div>

          <div class="btn">
            <input type="submit" value="Envoyer">
          </div>
        </form>

      </main>
    </body>
</html>
