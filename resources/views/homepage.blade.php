<x-layout>
    <div class="container py-md-5">
      <div class="row align-items-center">
        <div class="col-lg-7 py-3 py-md-5">
          <h1 class="display-3">Ηλεκτρονικές Φόρμες</h1>
          <h2 class="display-3">e-forms</h2>
          <p class="lead text-muted">Οι Ηλεκτρονικές Φόρμες είναι ένα πληροφοριακό σύστημα που επιτρέπει τη συλλογή και το διαμοιρασμό στοιχείων και αρχείων μεταξύ μιας υπηρεσίας και χρηστών (Σχολεία ή/και Εκπαιδευτικοί).</p>
          <p class="lead text-muted">Η πρόσβαση αφορά Σχολικές Μονάδες ή Εκπαιδευτικούς και πραγματοποιείται με όνομα χρήστη και κωδικό που έχουν λάβει από τη Διεύθυνση.</p>
        
        </div>
        <div class="col-lg-5 pl-lg-5 pb-3 py-lg-5">
        
        <form action="/login" method="POST" id="login-form">
            @csrf
            <div class="form-group">
              <label for="username-login" class="text-muted mb-1"><small>Όνομα Χρήστη</small></label>
              <input name="username" id="username-login" class="form-control" type="text" placeholder="Όνομα Χρήστη" autocomplete="off" />
            </div>

            
            <div class="form-group">
              <label for="password-login" class="text-muted mb-1"><small>Κωδικός</small></label>
              <input name="password" id="password-login" class="form-control" type="password" placeholder="Κωδικός" />
            </div>
            <div class="d-grid">
                <button type="submit" class="py-3 mt-4 btn btn-lg btn-success">Είσοδος</button>
            </div>
          </form>
        </div>
      </div>
    </div>

</x-layout>