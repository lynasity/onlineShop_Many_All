<?php
namespace App\MyExtensions\shoppingCart\contracts;
interface shoppingCart{
  // 购物车中添加商品
  function add($id);
  // 购物车中减少商品
  function delete($id);
  // 购物车中所有商品
  function all();
  // 购物车总价
  function totalPrice();
  // 总计不含运费
  // function priceWithoutShipment();
  // 某一项费用
  function itemPrice($id);
  // 购物车商品数量
  function totalNum();
  // 是否包含某个条目
  // function search();
  // 减少对应条目的数量
  function cut($id);
}
