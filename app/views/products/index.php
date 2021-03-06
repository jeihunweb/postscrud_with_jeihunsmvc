<?php require APPROOT . '\views\inc\header.php'; ?>

<a href="<?php echo URLROOT; ?>products/add" class="btn btn-success float-right mt-5">Create a Product</a>
<h1 class="float-left mt-5">Read Products</h1>
<table class="table table-hover table-dark mt-5">
  <thead>
    <tr>
      <th scope="col">Id </th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
     <?php foreach($data['products'] as $product)  :   ?>
    <tr>
      <th scope="row"><?php echo $product->id; ?></th>
      <td><?php echo $product->productName; ?></td>
      <td><?php echo $product->price; ?>$</td>
      <td><?php echo $product->description; ?></td>
      <td><?php echo $product->categoryName; ?></td>
      <td>   
   <a href="<?php echo URLROOT; ?>products/show/<?php echo $product->id; ?>" class="btn btn-primary">Read</a>
   <a href="" class="btn btn-info">Edit</a>
   <a href="#" class="btn btn-danger">Delete</a>
      </td>

    </tr>

<?php  endforeach; ?>

  </tbody>
</table>




<?php require APPROOT . '\views\inc\footer.php'; ?>