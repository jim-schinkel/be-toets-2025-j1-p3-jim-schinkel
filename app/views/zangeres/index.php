<?php require_once APPROOT . '/views/includes/header.php'; ?>
 
<div class="container mt-3">
 
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h3 class="text-danger text-center"><?= $data['title']; ?></h3>
        </div>
        <div class="col-1"></div>
    </div>
 
 
   
    <!-- begin tabel smartphones -->
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Naam</th>
                        <th scope="col">Nettowaarde</th>  
                        <th scope="col">Land</th>
                        <th scope="col">Mobiel</th>
                        <th scope="col">Leeftijd</th>                    
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['Zangeres'] as $Zangeres) : ?>
                        <tr>
                            <td><?= $Zangeres->Naam; ?></td>
                            <td><?= $Zangeres->Nettowaarde; ?></td>
                            <td><?= $Zangeres->Land; ?></td>
                            <td><?= $Zangeres->Mobiel; ?></td>
                            <td><?= $Zangeres->Leeftijd; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= URLROOT; ?>/homepages/index">home</a>
        </div>
        <div class="col-1"></div>
    </div>
    <!-- einde tabel smartphones -->
 
<?php require_once APPROOT . '/views/includes/footer.php'; ?>