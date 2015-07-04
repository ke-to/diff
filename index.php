 <?php require_once('header.php'); ?>
 <p>もうリストの差分をチェックする時に順番を気にする必要はありません。</p>
  <div class="row">
    <form class="col s12" action="show_form_data.php" method="post">
	    <div class="row">
        <button class="btn waves-effect waves-light blue" type="submit" name="action">Submit<i class="material-icons right">send</i></i></button>
   	    </div>
        <div class="row">
        <div class="input-field col s6">
          <textarea id="textarea1" class="materialize-textarea" name="comment" cols="100" rows="5"></textarea>
          <label for="textarea1">list1</label>
        </div>
        <div class="input-field col s6">
          <textarea id="textarea2" class="materialize-textarea" name="comment2" cols="100" rows="5"></textarea>
          <label for="textarea1">list2</label>
        </div>
      </div>
    </form>
  </div>
 <?php require_once('footer.php'); ?>
