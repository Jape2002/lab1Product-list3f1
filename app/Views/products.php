<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action ="/save" method="post"> 
     <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>"> 
         <label>ProductName</label> 
         <input type="text" name="ProductName" placeholder="ProductName" value="<?= isset($pro['ProductName']) ? $pro['ProductName'] : '' ?>"> 
         <br> 
         <label>ProductDescription</label> 
         <input type="text" name="ProductDescription" placeholder="ProductDescription"value="<?= isset($pro['ProductDescription']) ? $pro['ProductDescription']:''?>"> 
         <br> 
         <label>ProductCategory</label> 
         <select name="ProductCategory" value="<?= isset($pro['ProductDescription']) ? $pro['ProductDescription'] : '' ?>">
         <option value="Drinks"<?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Drinks' ? 'selected' : '' ?>>Drinks</option>
         <option value="Chips"<?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Chips' ? 'selected' : '' ?>>Chips</option>
         <option value="Meat"<?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Meat' ? 'selected' : '' ?>>Meat</option>
         <option value="Chocolate"<?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Chocolate' ? 'selected' : '' ?>>Chocolate</option>
         <option value="Vegetables"<?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Vegetables' ? 'selected' : '' ?>>Vegetables</option>
         </option>
        </select>
         <br> 
         <label>ProductQuantity</label> 
         <input type="number" name= "ProductQuantity" placeholder="Quantity" value="<?= isset($pro['ProductQuantity']) ? $pro['ProductQuantity'] : '' ?>" >
         <br> 
         <label>ProductPrice</label> 
         <input type="text" name="ProductPrice" placeholder="ProductPrice"value="<?= isset($pro['ProductPrice']) ?  $pro['ProductPrice']:''?>"> 
         <br> 
         <input type="submit" value="save">
    </form>
    <h1>Product Listing</h1>
    <table border="1">
        <tr>
            <th>ProductName</th>
            <th>ProductDescription</th>
            <th>ProductCategory</th>
            <th>ProductQuantity</th>
            <th>ProductPrice</th>
        </tr>
        <?php foreach ($product as $pr): ?>
            <tr>
                <td><?= $pr['ProductName'] ?></td>
                <td><?= $pr['ProductDescription'] ?></td>
                <td><?= $pr['ProductCategory'] ?></td>
                <td><?= $pr['ProductQuantity'] ?></td>
                <td><?= $pr['ProductPrice'] ?></td>
                <td><a href="/delete/<?= $pr['id'] ?>">delete</a>|| <a href="/edit/<?= $pr['id'] ?>">edit</a> </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <h1>Listing</h1>
    <ul>
    <?php foreach ($product as $pr): ?>
        <li>
            <strong>ProductName: </strong><?= $pr ['ProductName']?><br>
            <strong>ProductDescription: </strong><?= $pr ['ProductDescription']?><br>
            <strong>ProductCategory: </strong><?= $pr ['ProductCategory']?><br>
            <strong>ProductQuantity: </strong><?= $pr ['ProductQuantity']?><br>
            <strong>ProductPrice: </strong><?= $pr ['ProductPrice']?><br>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>