<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <meta name="description" content="POS - Bootstrap Admin Template">
  <meta name="keywords"
    content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
  <meta name="author" content="Dreamguys - Bootstrap Admin Template">
  <meta name="robots" content="noindex, nofollow">
  <title>Medical</title>

  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.jpg">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

  <link rel="stylesheet" href="assets/css/animate.css">

  <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    tr,
    th,
    td {
      border: 1px solid #212529 !important;
    }
  </style>
</head>

<body>
  <div id="global-loader">
    <div class="whirly-loader"> </div>
  </div>

  <div class="main-wrapper">

    <div class="page-wrapper m-0">
      <div class="content">
        <section class="comp-section">
          <div class="row">
            <div class="col-md-12">
              <div class="card p-0">
                <div class="card-header">
                  <div class="section-header m-0">
                    <h3 class="section-title">Registre medical</h3>
                    <div class="line"></div>
                  </div>
                </div>
                <div class="card-body">
                  <form action="#">
                    <div class="row justify-content-between mb-3">
                      <div class="col-md-10">
                        <div class="search-set">
                          <div class="search-path">
                            <a class="btn btn-filter" id="filter_search">
                              <img src="assets/img/icons/filter.svg" alt="img">
                              <span><img src="assets/img/icons/closes.svg" alt="img"></span>
                            </a>
                          </div>

                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Recherche" aria-label="Username"
                              aria-describedby="basic-addon1">
                            <button class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                          data-bs-target="#add-module"><i class="fas fa-plus"></i> Ajouter</button>
                      </div>
                    </div>
                    <div class="card" id="filter_inputs">
                      <div class="card-body pb-0">
                        <div class="row align-items-end">
                          <div class="col-md-5 col-sm-6 col-12">
                            <div class="form-group m-0">
                              <label>Promotion</label>
                              <select class="js-example-basic-single form-small select2">
                                <option selected="selected">20##-20##</option>
                                <option>20##-20##</option>
                                <option>20##-20##</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-12">
                            <div class="form-group m-0">
                              <label>Année</label>
                              <select class="js-example-basic-single form-small select2">
                                <option selected="selected">Année 1</option>
                                <option>Année 2</option>
                                <option>Année 3</option>
                                <option>Alumni</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-1 col-sm-6 col-12 ms-auto">
                            <div class="form-group m-0">
                              <a class="btn btn-filters ms-auto"><img src="assets/img/icons/search-whites.svg"
                                  alt="img"></a>
                            </div>
                          </div>
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="comp-section">
          <div class="row">
            <div class="col-md-4">
              <a href="#" class="card" data-bs-toggle="modal" data-bs-target="#activités">
                <div class="card-body p-1">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between">
                      <div class="d-flex">
                        <h1 class="me-3">
                          <i class="far fa-file"></i>
                        </h1>
                        <div>
                          <span class="d-block mb-2 fs-6 fw-bold">John Doe </span>
                          <span class="mb-0 me-5">1ère année</span>
                          <span class="mb-0"><strong>Filière-1</strong></span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </a>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

  <div class="modal fade" id="add-module" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Enregistrer un partenaire</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <div class="modal-body">

          <div class="comp-section">
            <ul class="nav nav-tabs nav-tabs-solid">
              <li class="nav-item"><a class="nav-link active" href="#solid-tab1" data-bs-toggle="tab">Info Personnel</a>
              </li>
              <li class="nav-item"><a class="nav-link" href="#solid-tab2" data-bs-toggle="tab">Visite</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane show active" id="solid-tab1">
                <form action="#" class="">
                  <div class="form-group">
                    <div class="row g-3">
                      <div class="col-md-12">
                        <label for="choix" class="form-label">Apprenant</label>
                        <select id="choix" class="js-example-basic-single select2" data-dropdown-parent="#add-module">
                          <option selected="selected">Stage</option>
                          <option>Activités</option>
                          <option value="autres">Autres</option>
                        </select>
                      </div>
                      <div class="col-md-4">
                        <label for="groupeSanguin" class="form-label">Groupe Sanguin</label>
                        <select id="groupeSanguin" class="form-select">
                          <option selected>Choisire...</option>
                          <option>O+</option>
                          <option>O-</option>
                          <option>A+</option>
                          <option>A-</option>
                          <option>B+</option>
                          <option>B-</option>
                          <option>AB+</option>
                          <option>AB-</option>
                        </select>
                      </div>
                      <div class="col-md-4">
                        <label for="taille" class="form-label">Taille</label>
                        <input type="number" class="form-control" id="taille">
                      </div>
                      <div class="col-md-4">
                        <label for="poids" class="form-label">Poid</label>
                        <input type="number" class="form-control" id="poids">
                      </div>
                    </div>
                    <label class="col-form-label">Condition médicale</label>
                    <div class="row g-3 outer-repeater">
                      <div class="col-10">
                        <div data-repeater-list="outer-group" class="outer">
                          <div data-repeater-item class="outer">
                            <div class="row">
                              <div class="col-10">
                                <input type="text" name="text-input" placeholder="Ajouter une condition"
                                  class="outer form-control mb-3" />
                              </div>
                              <div class="col-2">
                                <button data-repeater-delete type="button"
                                  class="outer btn  btn-danger">Supprimer</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-2">
                        <button data-repeater-create type="button" class="outer btn  btn-success w-100">Ajouter</button>
                      </div>
                    </div>
                    <label class="col-form-label">Médicament actuelle</label>
                    <div class="row g-3 outer-repeater">
                      <div class="col-10">
                        <div data-repeater-list="outer-group" class="outer">
                          <div data-repeater-item class="outer">
                            <div class="row">
                              <div class="col-10">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <input type="text" name="text-input" placeholder="Nom de médicaments"
                                      class="outer form-control mb-3" />
                                  </div>
                                  <div class="col-lg-6">
                                    <input type="text" name="text-input" placeholder="Posologie"
                                      class="outer form-control mb-3" />
                                  </div>
                                  <div class="col-lg-6">
                                    <input type="text" name="text-input" placeholder="Fréquence"
                                      class="outer form-control mb-3" />
                                  </div>
                                </div>
                              </div>
                              <div class="col-2">
                                <button data-repeater-delete type="button"
                                  class="outer btn  btn-danger">Supprimer</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-2">
                        <button data-repeater-create type="button"
                          class="outer-1 btn  btn-success w-100">Ajouter</button>
                      </div>
                    </div>
                    <label class="col-form-label">Allergies</label>
                    <div class="row g-3 outer-repeater">
                      <div class="col-10">
                        <div data-repeater-list="outer-group-2" class="outer-2">
                          <div data-repeater-item class="outer-2">
                            <div class="row">
                              <div class="col-10">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <input type="text" name="text-input" placeholder="Réaction"
                                      class="outer-2 form-control mb-3" />
                                  </div>
                                  <div class="col-lg-6">
                                    <select id="inputState" class="form-select">
                                      <option selected>Alimentaires...</option>
                                      <option>Saisonnières</option>
                                      <option>Intérieur</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="col-2">
                                <button data-repeater-delete type="button"
                                  class="outer-2 btn  btn-danger">Supprimer</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-2">
                        <button data-repeater-create type="button" class="outer btn  btn-success w-100">Ajouter</button>
                      </div>
                    </div>
                    <div class="row g-3 mb-4">
                      <div class="col-md-6">
                        <label for="inputState" class="form-label">Personne à contacté en cas d'urgence</label>
                        <select id="inputState" class="form-select">
                          <option selected>Son Père...</option>
                          <option>Sa Mère</option>
                          <option>Son Tuteur/ Sa Tutrice</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Médécin traitant</label>
                        <input type="text" class="form-control" id="inputPassword4">
                      </div>
                    </div>
                    <div class="row g-3">
                      <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Autorisation pour administrer des médicaments (le cas échéantbheading)
                          </label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Autorisation pour transporter l'apprenant à l'hôpital en cas d'urgence
                          </label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Autorisation pour consulter le médecin traitant de l'apprenant en cas de besoin
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="tab-pane" id="solid-tab2">
                <form class="row g-3">
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Etabilssement</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                  </div>
                  <div class="col-md-4">
                    <label for="inputEmail4" class="form-label">Date d'entrée</label>
                    <input type="date" class="form-control" id="dateEntree">
                  </div>
                  <div class="col-md-2">
                    <label for="inputPassword4" class="form-label">Heure</label>
                    <input type="time" class="form-control" id="heureEntree">
                  </div>
                  <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Date de Sortie</label>
                    <input type="date" class="form-control" id="dateSortie">
                  </div>
                  <div class="col-md-2">
                    <label for="inputPassword4" class="form-label">Heure</label>
                    <input type="time" class="form-control" id="heureSortie">
                  </div>
                  <div class="col-8">
                    <label for="inputAddress2" class="form-label">Médécin</label>
                    <input type="text" class="form-control" id="medecin" placeholder="">
                  </div>
                  <div class="col-md-4">
                    <label for="inputCity" class="form-label">Etat de santé</label>
                    <input type="text" class="form-control" id="etatSante">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-end">
          <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Annuler</button>
          <button type="button" class="btn btn-primary btn- submit">Soumettre</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="activités" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Activités de la structure</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <div class="modal-body">
          <div class="comp-section">
            <ul class="nav nav-tabs nav-tabs-solid">
              <li class="nav-item"><a class="nav-link active" href="#solid-tab3" data-bs-toggle="tab">Info Personnel</a>
              </li>
              <li class="nav-item"><a class="nav-link" href="#solid-tab4" data-bs-toggle="tab">Visite</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane show active" id="solid-tab3">
                <div class="row">
                  <div class="col-lg-2">
                    <div class="avatar avatar-xxl">
                      <img class="avatar-img rounded-3" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between">
                          <p><span class="mb-0 fs-6 fw-bold">Mr/Mme/Mlle</span> John Doe</p>
                      </li>
                      <li class="list-group-item d-flex justify-content-between">
                          <p><span class="mb-0 fs-6 fw-bold">Age</span> 0# ans</p>
                      </li>
                      <li class="list-group-item d-flex justify-content-between">
                          <p><span class="mb-0 fs-6 fw-bold">Adresse </span> city-name, country</p>
                      </li>
                    </ul>
                  </div>
                  <div class="col-lg-5">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between">
                        <div>
                          <span class="d-block mb-0 fs-6 fw-bold">Sexe :</span>
                          <span class="mb-0">Masculin</span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-12">
                    <div class="table-responsive">
                      <table class="table table-striped mt-3">
                        <thead>
                          <tr class="table-info">
                            <th scope="col">Groupe Sanguin</th>
                            <th scope="col">Taille</th>
                            <th scope="col">Poid</th>
                            <th scope="col">Date de Naissance</th>
                            <th scope="col">Adresse</th>
                            <th scope="col">Nom du Père</th>
                            <th scope="col">Nom de la Mère</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">ABO+</th>
                            <td>0#cm</td>
                            <td>0#.0#Kg</td>
                            <td>00/00/20##</td>
                            <td>Quartier - Ville - Pays</td>
                            <td>Nom du Père</td>
                            <td>Nom de la Mère</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-12">
                    <h4 class="m-0">Condition médicale</h4>
                    <ul class="list-group">
                      <li class="list-group-item">An item</li>
                      <li class="list-group-item">A second item</li>
                      <li class="list-group-item">A third item</li>
                    </ul>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-12">
                    <h4 class="m-0">Médicament actuelle</h4>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr class="table-success">
                            <th scope="col">N°</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Postologie </th>
                            <th scope="col">Fréquence</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">0#</th>
                            <td>Name</td>
                            <td>-----</td>
                            <td>-----</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-12">
                    <h4 class="m-0">Allergies</h4>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr class="table-danger">
                            <th scope="col">N°</th>
                            <th scope="col">Réaction</th>
                            <th scope="col">Type</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">0#</th>
                            <td>Polaine</td>
                            <td>Environnemental</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-12">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between">
                        <div>
                          <span class="mb-0 fs-6 fw-bold">Personne à contacté en cas d'urgence :</span>
                          <span class="mb-0">Sa Mère </span>
                        </div>
                      </li>
                      <li class="list-group-item d-flex justify-content-between">
                        <div>
                          <span class="mb-0 fs-6 fw-bold">Médécin traitant :</span>
                          <span class="mb-0">John Doe </span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-12">
                    <h4 class="m-0">Autorisations Médicales</h4>
                    <ul class="list-group">
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                          <div class="fw-bold">Autorisation pour administrer des médicaments (le cas échéantbheading)
                          </div>
                        </div>
                        <span class="badge bg-primary rounded-pill">Oui</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                          <div class="fw-bold">Autorisation pour transporter l'apprenant à l'hôpital en cas d'urgence
                          </div>
                        </div>
                        <span class="badge bg-danger rounded-pill">Non</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                          <div class="fw-bold">Autorisation pour consulter le médecin traitant de l'apprenant en cas de
                            besoin </div>
                        </div>
                        <span class="badge bg-primary rounded-pill">Oui</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="solid-tab4">
                <table class="table table-striped mt-3">
                  <thead>
                    <tr>
                      <th scope="col">N°</th>
                      <th scope="col">Etabilssement</th>
                      <th scope="col">Date d'entrée</th>
                      <th scope="col">Date de sortie</th>
                      <th scope="col">Médécin</th>
                      <th scope="col" class="text-end">Etat de Santé</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">0#</th>
                      <td>--------</td>
                      <td>00/00/20## 00:00</td>
                      <td>00/00/20## 00:00</td>
                      <td>Medecin-1</td>
                      <td class="text-end">
                        State-Name
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="assets/js/jquery-3.6.0.min.js"></script>

  <script src="assets/js/feather.min.js"></script>

  <script src="assets/js/jquery.slimscroll.min.js"></script>

  <script src="assets/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/dataTables.bootstrap4.min.js"></script>

  <script src="assets/js/moment.min.js"></script>
  <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

  <script src="assets/plugins/select2/js/select2.min.js"></script>
  <script src="assets/plugins/select2/js/custom-select.js"></script>

  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/script.js"></script>

  <script src="assets/js/jquery.repeater.js"></script>

  <script>
    document.querySelector('.submit').addEventListener('click', function(event) {
  // Prevent the default form submission
  event.preventDefault();

  // Retrieve "Info Personnel" data
  const apprenant = document.querySelector('#choix').value;
  const groupeSanguin = document.querySelector('#groupeSanguin').value;
  const taille = document.querySelector('#taille').value;
  const poids = document.querySelector('#poids').value;

  // Retrieve "Conditions Médicales" data
  const conditionsMedicales = Array.from(document.querySelectorAll('[name="text-input"]'))
    .map(input => input.value);

  // Retrieve "Visite" data
  const etablissement = document.querySelector('#inputAddress').value;
  const dateEntree = document.querySelector('#dateEntree').value;
  const heureEntree = document.querySelector('#heureEntree').value;
  const dateSortie = document.querySelector('#dateSortie').value;
  const heureSortie = document.querySelector('#heureSortie').value;
  const medecin = document.querySelector('#medecin').value;
  const etatSante = document.querySelector('#etatSante').value;

  // Display the collected data in the console (for debugging)
  console.log('Info Personnel:', { apprenant, groupeSanguin, taille, poids });
  console.log('Conditions Médicales:', conditionsMedicales);
  console.log('Visite:', { etablissement, dateEntree, heureEntree, dateSortie, heureSortie, medecin, etatSante });

  // Send data to the server using fetch
  fetch('insertion_db.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
      apprenant,
      groupeSanguin,
      taille,
      poids,
      conditionsMedicales,
      etablissement,
      dateEntree,
      heureEntree,
      dateSortie,
      heureSortie,
      medecin,
      etatSante
    })
  })
  .then(response => response.text())
  .then(data => {
    console.log('Server Response:', data);
    alert('Data submitted successfully!');
  })
  .catch(error => {
    console.error('Error:', error);
    alert('An error occurred while submitting the data.');
  });
});

  </script>

</body>

</html>