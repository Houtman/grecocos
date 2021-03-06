<div id="content" class="colMS">
  <div id="content-main">  
    <div class="module">
      <table>
      <caption><a href="sites/" class="section">1. Orders</a></caption>
      <tr>
        <th scope="row">
          <?php e($html->link('1.1 View/modify orders',
                              '/supplier/orders/index'))?>
        </th>        
        <td></td>
        <td></td>  
      </tr>
      <tr>
        <th scope="row">
          <?php e($html->link('1.2 Close batch of orders',
                              '/supplier/orders/close_batch'))?>
        </th>        
        <td></td>
        <td></td>  
      </tr>
      
      </table>
    </div>

    <div class="module">
      <table>
      <caption>2. Delivery dates</caption>
      <tr>
        <th scope="row">
          <?php e($html->link('2.1 View/maintain delivery dates',
                              '/supplier/deliveries/index'))?>
        </th>        
        <td></td>
        <td></td>  
      </tr>
      </table>
    </div> 
    
    <div class="module">
      <table>
      <caption>3. Products</caption>
      <tr>
        <th scope="row">
          <?php e($html->link('3.2 View/maintain products',
                              '/supplier/products/index'))?>
        </th>        
        <td></td>
        <td></td>  
      </tr>
      <tr>
        <th scope="row">
          <?php e($html->link('3.1 View/maintain categories',
                              '/supplier/categories/index'))?>
        </th>        
        <td></td>
        <td></td>  
      </tr>
      <tr>
        <th scope="row">
          <?php e($html->link('3.3 Mark products as (un)available',
                              '#'))?>
        </th>        
        <td></td>
        <td></td>  
      </tr>
      
      </table>
    </div> 

   
  </div>

  <br class="clear" />
</div>
