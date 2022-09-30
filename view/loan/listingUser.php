
        <div class=" ">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col"><a href="index.php" class="text-light"></a></th>
                        <th scope="col"><a href=<?= $uri->routeOrder("firstname")?> class="text-light">nom</a>  </th>
                        <th scope="col"><a href=<?=$uri->routeOrder("lastname")?> class="text-light">prenom</a> </th>
                        <th scope="col"><a href=<?=$uri->routeOrder("pseudo")?> class="text-light">pseudo</a></th>
                        <th scope="col"><a href=<?=$uri->routeOrder("age")?> class="text-light">age</a></th>
                        <th scope="col"><a href=<?=$uri->routeOrder("tel")?> class="text-light">tel</a></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <?php foreach ($data_User as $user ): ?>
                <tbody>
                    <?php if($user["id_user"]==$_SESSION["modify"]) :?>
                    <?php $updateLink="controller/updateMember.php?modify=".$_SESSION['modify'] ?>
                    <tr>
                        <form action=<?= $updateLink ?> method="post">
                            <th scope="row"><?=$user["id_user"]?></th>
                            <td>
                                <input type="text" class="form-control" name="name" id="name" value=<?=$user["user_firstname"]?> >
                            </td>
                            <td>
                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last name" value=<?=$user["user_lastname"]?> >
                            </td>
                            <td>
                                <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="pseudo" value=<?=$user["user_pseudo"]?> >
                            </td>
                            <td>
                                <input type="number" class="form-control" name="age" id="age" placeholder="your Age" value=<?=$user["user_age"]?> >
                            </td>
                            <td>
                                <input type="text" class="form-control" name="tel" id="tel" placeholder="Telephone" value=<?=$user["user_tel"]?> >
                            </td>
                            <td>
                            <button type="submit" class="btn btn-primary" >add Update</button>
                            </td>
                            <td></td>
                        </form>
                        <div class="alert alert-danger" <?= $showError?> > <?= $error?></div>
                    </tr>
                    <?php else :?>
                    <?php $modifylink=$uri->routeModify($user["id_user"]) ;?>
                    <?php $deletelink="controller/deleteUser.php?delete=".$user["id_user"] ;?>
                    <tr>
                        <th scope="row"><?=$user["id_user"]?></th>
                        <td><?=$user["user_firstname"]?></td>
                        <td><?=$user["user_lastname"]?></td>
                        <td><?=$user["user_pseudo"]?></td>
                        <td><?=$user["user_age"]?>ans</td>
                        <td><?=$user["user_tel"]?></td>
                        <td>
                            <button type="button" class="btn btn-primary" ><a href=<?=$modifylink?> class="text-white">Modifier</a>  </button> 
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger"><a href=<?=$deletelink?> class="text-white">Delete</a></button>
                        </td>
                    </tr>
                    <?php endif;?>
                </tbody>
                <?php endforeach ?>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            <button><a href=<?=$uri->precPage()?> class="text-dark">page prevedent</a> </button>
            <button><a href=<?=$uri->nextPage()?> class="text-dark">page suivant</a> </button>
        </div>

