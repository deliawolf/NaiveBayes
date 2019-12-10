<!DOCTYPE html>
<html class='uk-height-1-1'>
    <head>
      <title>Title</title>
      <meta charset="utf-8">
      <meta name="viewport" content="initial-scale=1">
      <link rel="stylesheet" href="css/uikit.min.css" />
      <script src="js/uikit.min.js"></script>
      <script src="js/uikit-icons.min.js"></script>
      <!-- UIkit CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.4/dist/css/uikit.min.css" />
      <!-- UIkit JS -->
      <script src="https://cdn.jsdelivr.net/npm/uikit@3.2.4/dist/js/uikit.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/uikit@3.2.4/dist/js/uikit-icons.min.js"></script>
    </head>
    <body class='uk-height-1-1' style="background-image: url(img/index.png);">
      <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
        <nav class="uk-background-secondary uk-light" uk-navbar="dropbar: true;">
          <div class="uk-navbar-left">
              <ul class="uk-navbar-nav">
                  <li class="uk-active"><a href="#">Naive Bayes</a></li>
                  <li><a href="view_dataset.php">Dataset</a></li>
                  <li><a href="klasifikasi_dataset.php">Klasifikasi</a></li>
                  <li><a href="uji_klasifikasi.php">Uji</a></li>
                  <li><a href="data_uji.php">Data Hasil Uji</a></li>
              </ul>
          </div>
      </div>
    <div>
        <div class="uk-container uk-margin-large-top">
          <p class="uk-text-lead uk-margin-small-top uk-heading-small uk-margin-large-left uk-margin-large-right">
             &nbsp;&nbsp;&nbsp;&nbsp;Website ini merupakan sistem aplikasi yang melakukan perhitungan naive bayes dengan fokus terhadap kasus probabilitas kebutaan berdasarkan 4 buah faktor yaitu umur, diabetes, hipertensi, dan intraokular. Naive bayes sendiri ialah :
          </p>
          <div class="uk-container uk-margin-small-top">
        <p class="uk-text-lead uk-margin-small-top uk-heading-small uk-margin-xlarge-left uk-margin-xlarge-right">
          <blockquote cite="#">
           In machine learning, naïve Bayes classifiers are a family of simple "probabilistic classifiers" based on applying Bayes' theorem with strong (naïve) independence assumptions between the features. They are among the simplest Bayesian network models
           <footer>Domingos, Pedro; Pazzani, Michael (1997) <cite><a href="#">On the optimality of the simple Bayesian classifier under zero-one loss. Machine Learning</a></cite></footer>
          </blockquote>
        </p>
        <div class="uk-container uk-margin-small-top">
        <p class="uk-text-lead uk-margin-small-top uk-heading-small uk-margin-large-left uk-margin-large-right">
           Developer terdiri dari 3 orang mahasiswa kelas AI-2 / IF-2 yaitu
           <ul class="uk-list uk-list-bullet uk-text-lead uk-margin-small-top uk-heading-small uk-margin-xlarge-left uk-margin-xlarge-right">
              <li>10116051 ~ Muhammad Rizky F</li>
              <li>10116068 ~ Aditya Maulana R</li>
              <li>10116076 ~ Fritson Agung Julians A</li>
            </ul>
        </p>
        <div class="uk-container uk-margin-small-top">
        <a href="view_dataset.php"><button class="uk-align-center uk-button uk-button-secondary">Coba Aplikasi</button></a>
    </div>
    </body>
</html>
