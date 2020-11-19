<!-- ./php/index.php -->

<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Conversion</title>
    </head>

    <body>
      <main>
        <div class="centre">
        <form action="form.php" method="post">
          <div class="entree">
            <p>Conversion :</p>
            <input class="valeur" type="number" value="Valeur à convertir" name="valeur">
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
            Convertir en
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
            <input type="submit" value="Convertir">
          </div>
        </form>
        </div>
      </main>
    </body>
</html>
