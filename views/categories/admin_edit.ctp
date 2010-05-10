<!-- Begin Navigation  -->
<div class="breadcrumbs">
  <?php e($html->link('Home', array('controller' => 'dashboard', 
  'action' => 'index', 'admin' => true))); ?> 
  &rsaquo; 
  <?php e($html->link('Products', array('controller' => 'categories', 
  'action' => 'index', 'admin' => true))); ?> 
  &rsaquo;                            
  Edit Product Category
</div>

<div id="content" class="colM">
  <h1>Edit Product Category</h1>
  <div id="content-main">
    <?php echo $this->Form->create('Category');?>
    <div>
      <?php e($form->hidden('id'))?>
      <?php echo $session->flash(); ?>
      <fieldset class="module aligned ">
        <!-- Begin Name  -->
        <div class="form-row name">
          <ul class="errorlist">
            <?php 
              if($form->isFieldError('Category.name')) 
                e($form->error ('Category.name', null, 
                                array('wrap' => 'li'))); 
            ?>
          </ul>      
          <div>
            <?php 
              e($form->label('name', "Category Name", 
                             array('class' => 'required'))); 
                             e($form->text('name', array('class' => 'vTextField')));
            ?>        
          </div>        
        </div>
        <!-- End Name  -->
        

      </fieldset>
      
      <div class="submit-row" >
        <?php echo $form->end(array('label' => 'Save', 'class' => 'default', 'div' => array('class' => false)));?>

      </div>

    </div>
  </form></div>
  <br class="clear" />
</div>
