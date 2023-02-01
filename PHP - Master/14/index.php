<?php
include_once('./arrayTools.php');
// $user = ["id" => 1, 'name' => "Aladdin", "email" => "example@mail.com"];
$users =
    [
        ["id" => 1, 'name' => "Aladdin", "email" => "example1@mail.com"],
        ["id" => 2, 'name' => "Joe's", "email" => "example2@mail.com"],
        ["id" => 3, 'name' => "Ahmed", "email" => "exampl3e@mail.com"]
    ];

// pr($user);
//echo $user['email'];
?>
<!-- <table border="1">
    <thead>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
    </thead>
    <tbody>
        <?php foreach ($user as $key => $value) : ?>
        <td><?php echo $value; ?></td>

        <?php endforeach; ?>
    </tbody>
</table> -->
<?php
pr($users);
echo $users[1]['name'];
?>
<table border="1">
    <thead>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
    </thead>
    <tbody>
        <?php foreach ($users as $key => $user) : ?>
        <!-- <td><?php pr($value); ?></td> -->
        <!-- <tr>
            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['name'] ?></td>
            <td><?php echo $user['email'] ?></td>
        </tr> -->
        <tr>
            <?php foreach ($user as $key => $value) : ?>

            <td><?php echo $value; ?></td>

            <?php endforeach; ?>
        </tr>

        <?php endforeach; ?>
    </tbody>
</table>