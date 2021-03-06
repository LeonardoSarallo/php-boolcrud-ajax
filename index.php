<?php include 'partials/_head.php'; ?>

  <div class="container index">
    <div class="row">
      <div class="col-12">
        <h1>Ospiti</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <table class="table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nome</th>
              <th>Cognome</th>
              <th>Cancella</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script id="ospite" type="text/x-handlebars-template">
    <tr>
      <td>{{id}}</td>
      <td>{{name}}</td>
      <td>{{lastname}}</td>
      <td>
        <button class="btn btn-danger delete-button" data-id={{id}}>Cancella</button>
      </td>
    </tr>
  </script>


<?php   include 'partials/_footer.php'; ?>
