<?php 

    $success = false;

    $contact_submit = $_POST['contact_form'] ?? '';

    if( $contact_submit == 'submited') {
        $name = strip_tags(trim($_POST['name']));
        $phone = strip_tags(trim($_POST['phone']));
        $text = strip_tags(trim($_POST['text']));
        $yes = strip_tags(trim($_POST['yes'] ?? ''));

        $body = $name . "\n" . $phone . "\n" . $text . "\n" . $yes;

        if($name == '' || $phone == '' || $text == '' || $yes == '') {
            $errors = 'Заполните необходимые поля';
        } elseif (mb_strlen($name, 'utf-8') > 20) {
            $errors = 'имя не может быть длиннее 20 символов';
        } else {
            mail('xxxre.paprika@gmail.com', "ContactMessage", $body);
            $success = true;
        };
    }
?>



<h2>CONTACT FORM</h2>
<style>
    label {
        width: 150px;
        display: block;
    }
</style>
<?php 

if($success) {
    echo "Фщрма успешно отправленна";
} else { 
    
    if($errors) {
        echo $errors;
    }
    
    ?>
    <form method="POST" action="">
        <p><label for="name"><input type="text" id="name" name="name" value="<?php if(isset($name)) echo $name;?>"></label></p> 
        <p><label for="phone"><input type="number" id="phone" name="phone" value="<?php if(isset($phone)) echo $phone;?>"></label> </p>
        <p> <label for="text">Description</label>
            <textarea name="text" id="text" cols="30" rows="10">
                <?php if(isset($name)) echo $name;?>
            </textarea>
        </p>
        <label for="yes" <?php if(isset($yes) && $yes == 'on') echo "checked";?>>Yes or No</label>
        <input type="checkbox" id="yes" name="yes">
        <label for="number">how much</label>
        <select name="number[]" id="number">
            <option value="1">1</option>
            <option value="2">2</option>
        </select>
        <p><button name="contact_form" value="submited">SEND CONTACT</button></p>
    </form> 
<?php } ?>


