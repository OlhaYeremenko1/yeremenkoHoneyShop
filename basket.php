<meta charset="UTF-8">
	<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 pull-right" id="basket">
   </div>

<!-- Modal -->
<div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 formmodal" tabindex="-1">
      
     <form class="form-horizontal" method="post" action="" id="formmail">
    <label class="control-label" for="inputFIO">ФИО</label>
    <input type="text" size="3" class="form-control" id="inputFIO"  required>
         
    <label class="control-label" for="inputTypeDelivery">Тип доставки</label><br>
    <select class="form-control" >
     <option>Достава по городу (80 грн.)</option>
     <option>Доставка Новой почтой(согластно тарифам)</option>
     <option>Самовывоз</option>
    </select>
         
    <label class="control-label" for="inputTypePayment">Тип оплаты</label><br>
    <select class="form-control">
    <option>Наличными</option>
    <option>Електронной картой</option>
    </select>
   <label class="control-label" for="inputDate">Желаемая дата доставки</label>
   <input type="date" class="form-control" id="inputDate" placeholder="Date" required>       
   <label class="control-label" for="inputEmail">Email</label>  
   <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required><br><br><br>
         
         
  <div class="buttons">       
  <button type="submit" class="btn btn-default" data-dismiss="modal">Заказать</button>
 <button type="button" onclick=" FormClose()" class="btn btn-default" data-dismiss="modal">Закрыть</button>
   </div>
   </form>

</div>  
            
 <script> Basket();</script>
