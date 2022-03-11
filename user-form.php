<form method="post">
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" <?= isset($user) ? 'value="' . $user['name'] . '"' : '' ?>>
    </div>
    <div>
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" <?= isset($user) ? 'value="' . $user['first_name'] . '"' : '' ?>>
    </div>

    <div>
        <label for="gender-male">Male</label>
        <input type="radio" name="gender" id="gender-male" value="male"
            <?= isset($user) && $user['gender'] === 'male' ? "checked=checked" : '' ?>
        >
        <label for="gender-female">Female</label>
        <input type="radio" name="gender" id="gender-female" value="female"
            <?= isset($user) && $user['gender'] === 'female' ? "checked=checked" : '' ?>
        >
    </div>

    <div>
        <label for="email">Email</label>
        <input type="text" id="email" name="email"  <?= isset($user) ? 'value="' . $user['email'] . '"' : '' ?>>
    </div>

    <div>
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone"  <?= isset($user) ? 'value="' . $user['phone'] . '"' : '' ?>>
    </div>

    <div><input type="submit" value="<?=isset($user) ? 'Edit' : 'Send'  ?>"></div>
</form>
