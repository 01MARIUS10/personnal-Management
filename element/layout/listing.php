<div class="pageList" >
        <div class="input">
            <input type="text" name="nom" id="nom" placeholder=<?= $order?? "nom" ?>>
        </div>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th ><a href="index.php?order=firstname">nom</a>  </th>
                        <th ><a href="index.php?order=lastname">prenom</a> </th>
                        <th ><a href="index.php?order=pseudo">pseudo</a></th>
                        <th ><a href="index.php?order=age">age</a></th>
                        <th ><a href="index.php?order=tel">tel</a></th>
                    </tr>
                </thead>
                <?php foreach ($data_User as $user ): ?>
                <tbody>
                    <tr>
                        <td><?=$user[user_firstname]?></td>
                        <td><?=$user[user_lastname]?></td>
                        <td><?=$user[user_pseudo]?></td>
                        <td><?=$user[user_age]?>ans</td>
                        <td><?=$user[user_tel]?></td>
                    </tr>
                </tbody>
                <?php endforeach  ?>
            </table>
        </div>
        <div class="bouton">
            <button>page prevedent</button>
            <button>page suivant</button>
        </div>
    </div>