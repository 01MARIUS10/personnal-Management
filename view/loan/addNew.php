
<h1 class="text-center mt-4">Add new user</h1>
<form class="m-auto w-75 " action="controller/addMember.php" method="post">
    <div class="form-row pb-2">
        <div class="col">
            <input type="text" class="form-control" name="name" id="name" placeholder="First name">
        </div>
        <div class="col">
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last name">
        </div>
        <div class="col">
            <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Pseudo">
        </div>
    </div>
    <div class="form-row pb-2">
        <div class="col">
            <input type="number" class="form-control" name="age" id="age" placeholder="your Age">
        </div>
        <div class="col">
            <input type="text" class="form-control" name="tel" id="tel" placeholder="Telephone">
        </div>
    </div>
    <input type="email" class="form-control mb-2" name="mail" id="mail" placeholder=" your email">
    <input type="password" class="form-control mb-2" name="password" id="password" placeholder="password">
    <div class="alert alert-danger" <?= $showError?> > <?= $error?></div>
    <button type="submit" class="btn btn-primary w-100 " >valider</button>
</form>