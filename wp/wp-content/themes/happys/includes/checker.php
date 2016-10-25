<?php $queried_object = get_queried_object(); ?>
<div class="row">
  <div class="columns small-12">
    <form id="checker" class="checker">
      <div class="checker--inner">
        <label class="row collapse align-middle">
          <div class="columns shrink">
            <input type="checkbox" id="check_1" name="check_1" value="check_1">
          </div>
          <div class="columns">
            Voici la checkbox 1 Voici la checkbox 1 Voici la checkbox 1 Voici
            la checkbox 1 Voici la checkbox 1 Voici la checkbox 1 Voici la checkbox 1
          </div>
        </label>

        <label class="row collapse align-middle">
          <div class="columns shrink">
            <input type="checkbox" id="check_2" name="check_2" value="check_2">
          </div>
          <div class="columns">
            Voici la checkbox 2
          </div>
        </label>

        <label class="row collapse align-middle">
          <div class="columns shrink">
            <input type="checkbox" id="check_3" name="check_3" value="check_3">
          </div>
          <div class="columns">
            Voici la checkbox 3
          </div>
        </label>

        <label class="row collapse align-middle">
          <div class="columns shrink">
            <input type="checkbox" id="check_4" name="check_4" value="check_4">
          </div>
          <div class="columns">
            Voici la checkbox 4
          </div>
        </label>
      </div>

      <div id="pot" class="robot-check">
        <label for='message' class="form--label table--cell">Leave this blank</label>
        <div class="table--cell">
          <input name="robotest" type="text" id="robotest" class="robot-test" />
        </div>
      </div>
      <input type="hidden" name="page_id" value="<?php echo $queried_object->ID; ?>">

      <input class="button button__checker align-center" type="submit" name="name" value="▶    チェックする">
    </form>
  </div>
</div>
