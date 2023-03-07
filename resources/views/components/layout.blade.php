<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Ηλ. Φόρμες</title>
    
    <link rel="stylesheet" href="css/bootstrap.css" />
  </head>
  <body>
    <header class="header-bar mb-3 bg-light bg-gradient">
      <div class="container d-flex flex-column flex-md-row align-items-center p-3">
        <h4 class="my-0 mr-md-auto font-weight-normal"><a href="/" class="text-blue">Ηλεκτρονικές Φόρμες</a></h4>
       
        <!--<form action="#" method="POST" class="mb-0 pt-2 pt-md-0">
          <div class="row align-items-center">
            <div class="col-md mr-0 pr-md-0 mb-3 mb-md-0">
              <input name="loginusername" class="form-control form-control-sm input-dark" type="text" placeholder="Όνομα Χρήστη" autocomplete="off" />
            </div>
            <div class="col-md mr-0 pr-md-0 mb-3 mb-md-0">
              <input name="loginpassword" class="form-control form-control-sm input-dark" type="password" placeholder="Κωδικός" />
            </div>
            <div class="col-md-auto">
              <button class="btn btn-primary btn-sm">Σύνδεση</button>
            </div>
          </div>
        </form>
-->
      </div>
    </header>
    <!-- header ends here -->
{{$slot}}

       <!-- footer begins -->
       <footer class="border-top text-center small text-muted py-3">
      <p class="m-0">Copyright &copy; 2023 <a href="/" class="text-muted">e-forms</a>. Διεύθυνση Π.Ε. Αχαΐας - Τμήμα Πληροφορικής & Νέων Τεχνολογιών - Ηλεκτρονικές Υπηρεσίες.</p>
    </footer>

    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>
