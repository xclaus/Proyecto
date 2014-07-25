@extends('main')


@section('contenido')
   	
   <div class="page-head">
	      <h2 class="pull-left">Escala de resiliencia Wagnild & Young</h2>
        <div class="pull-right">
           <div id="reportrange" class="pull-right">
              <i class="fa fa-calendar"></i>
              <span>December 9, 2013 - January 7, 2014</span> <b class="caret"></b>
           </div>
        </div>
        <div class="clearfix"></div>
        <!-- Breadcrumb -->
        <div class="bread-crumb">
          <a href="index.html"><i class="fa fa-home"></i> Inicio</a> 
          <!-- Divider -->
          <span class="divider">/</span> 
          <a href="resilencia.php" class="bread-current">Resilencia</a>
        </div>
        
        <div class="clearfix"></div>

	    </div>

	    <div class="matter">
	    	<div class="container">
	    		<div class="row">

					<div class="col-12">
	
	
	<div id="msg"></div>

	<div class="table-responsive">

	<form action="" name="resilencia" method="post"  id="resilencia" onsubmit="valida()">
	<table class="table table-bordered table-condensed">
		<thead>
			
		</thead>

		<tbody>
			<tr>
				<td colspan="1"></td>
				<td colspan="4">En Desacuerdo</td>
				<td colspan="3">De Acuerdo</td>
			</tr>

			<tr>
				<td>1.-Cuando planeo algo lo realizo</td>
				<td><span>1</span><input type="radio" value="1" name="uno"></td>
				<td><span>2</span><input type="radio" value="2" name="uno"></td>
				<td><span>3</span><input type="radio" value="3" name="uno"></td>
				<td><span>4</span><input type="radio" value="4" name="uno"></td>
				<td><span>5</span><input type="radio" value="5" name="uno"></td>
				<td><span>6</span><input type="radio" value="6" name="uno"></td>
				<td><span>7</span><input type="radio" value="7" name="uno"></td>
			</tr>

			<tr>
				<td>2.-Generalmente me las arreglo de una manera u otra</td>
				<td><span>1</span><input type="radio" value="1" name="2"></td>
				<td><span>2</span><input type="radio" value="2" name="2"></td>
				<td><span>3</span><input type="radio" value="3" name="2"></td>
				<td><span>4</span><input type="radio" value="4" name="2"></td>
				<td><span>5</span><input type="radio" value="5" name="2"></td>
				<td><span>6</span><input type="radio" value="6" name="2"></td>
				<td><span>7</span><input type="radio" value="7" name="2"></td>
			</tr>

			<tr>
				<td>3.-Dependo más de mi mismo que de otras personas</td>
				<td><span>1</span><input type="radio" value="1" name="3"></td>
				<td><span>2</span><input type="radio" value="2" name="3"></td>
				<td><span>3</span><input type="radio" value="3" name="3"></td>
				<td><span>4</span><input type="radio" value="4" name="3"></td>
				<td><span>5</span><input type="radio" value="5" name="3"></td>
				<td><span>6</span><input type="radio" value="6" name="3"></td>
				<td><span>7</span><input type="radio" value="7" name="3"></td>
			</tr>

			<tr>
				<td>4.-Es importante para mí mantenerme interesado en las cosas</td>
				<td><span>1</span><input type="radio" value="1" name="4"></td>
				<td><span>2</span><input type="radio" value="2" name="4"></td>
				<td><span>3</span><input type="radio" value="3" name="4"></td>
				<td><span>4</span><input type="radio" value="4" name="4"></td>
				<td><span>5</span><input type="radio" value="5" name="4"></td>
				<td><span>6</span><input type="radio" value="6" name="4"></td>
				<td><span>7</span><input type="radio" value="7" name="4"></td>
			</tr>

			<tr>
				<td>5.-Puedo estar solo si tengo que hacerlo</td>
				<td><span>1</span><input type="radio" value="1" name="5"></td>
				<td><span>2</span><input type="radio" value="2" name="5"></td>
				<td><span>3</span><input type="radio" value="3" name="5"></td>
				<td><span>4</span><input type="radio" value="4" name="5"></td>
				<td><span>5</span><input type="radio" value="5" name="5"></td>
				<td><span>6</span><input type="radio" value="6" name="5"></td>
				<td><span>7</span><input type="radio" value="7" name="5"></td>
			</tr>

			<tr>
				<td>6.-Me siento orgulloso de haber logrado cosas en mi vida</td>
				<td><span>1</span><input type="radio" value="1" name="6"></td>
				<td><span>2</span><input type="radio" value="2" name="6"></td>
				<td><span>3</span><input type="radio" value="3" name="6"></td>
				<td><span>4</span><input type="radio" value="4" name="6"></td>
				<td><span>5</span><input type="radio" value="5" name="6"></td>
				<td><span>6</span><input type="radio" value="6" name="6"></td>
				<td><span>7</span><input type="radio" value="7" name="6"></td>
			</tr>

			<tr>
				<td>7.-Usualmente veo las cosas a largo plazo</td>
				<td><span>1</span><input type="radio" value="1" name="7"></td>
				<td><span>2</span><input type="radio" value="2" name="7"></td>
				<td><span>3</span><input type="radio" value="3" name="7"></td>
				<td><span>4</span><input type="radio" value="4" name="7"></td>
				<td><span>5</span><input type="radio" value="5" name="7"></td>
				<td><span>6</span><input type="radio" value="6" name="7"></td>
				<td><span>7</span><input type="radio" value="7" name="7"></td>
			</tr>

			<tr>
				<td>8.-Soy amigo de mi mismo</td>
				<td><span>1</span><input type="radio" value="1" name="8"></td>
				<td><span>2</span><input type="radio" value="2" name="8"></td>
				<td><span>3</span><input type="radio" value="3" name="8"></td>
				<td><span>4</span><input type="radio" value="4" name="8"></td>
				<td><span>5</span><input type="radio" value="5" name="8"></td>
				<td><span>6</span><input type="radio" value="6" name="8"></td>
				<td><span>7</span><input type="radio" value="7" name="8"></td>
			</tr>

			<tr>
				<td>9.-Siento que puedo manejar varias cosas al mismo tiempo</td>
				<td><span>1</span><input type="radio" value="1" name="9"></td>
				<td><span>2</span><input type="radio" value="2" name="9"></td>
				<td><span>3</span><input type="radio" value="3" name="9"></td>
				<td><span>4</span><input type="radio" value="4" name="9"></td>
				<td><span>5</span><input type="radio" value="5" name="9"></td>
				<td><span>6</span><input type="radio" value="6" name="9"></td>
				<td><span>7</span><input type="radio" value="7" name="9"></td>
			</tr>

			<tr>
				<td>10.-Soy decidido/a</td>
				<td><span>1</span><input type="radio" value="1" name="10"></td>
				<td><span>2</span><input type="radio" value="2" name="10"></td>
				<td><span>3</span><input type="radio" value="3" name="10"></td>
				<td><span>4</span><input type="radio" value="4" name="10"></td>
				<td><span>5</span><input type="radio" value="5" name="10"></td>
				<td><span>6</span><input type="radio" value="6" name="10"></td>
				<td><span>7</span><input type="radio" value="7" name="10"></td>
			</tr>

			<tr>
				<td>11.-Rara vez me pregunto cuál es la finalidad de todo</td>
				<td><span>1</span><input type="radio" value="1" name="11"></td>
				<td><span>2</span><input type="radio" value="2" name="11"></td>
				<td><span>3</span><input type="radio" value="3" name="11"></td>
				<td><span>4</span><input type="radio" value="4" name="11"></td>
				<td><span>5</span><input type="radio" value="5" name="11"></td>
				<td><span>6</span><input type="radio" value="6" name="11"></td>
				<td><span>7</span><input type="radio" value="7" name="11"></td>
			</tr>

			<tr>
				<td>12.-Tomo las cosas una por una</td>
				<td><span>1</span><input type="radio" value="1" name="12"></td>
				<td><span>2</span><input type="radio" value="2" name="12"></td>
				<td><span>3</span><input type="radio" value="3" name="12"></td>
				<td><span>4</span><input type="radio" value="4" name="12"></td>
				<td><span>5</span><input type="radio" value="5" name="12"></td>
				<td><span>6</span><input type="radio" value="6" name="12"></td>
				<td><span>7</span><input type="radio" value="7" name="12"></td>
			</tr>

			<tr>
				<td>13.-Puedo enfrentar las dificultades porque las he experimentado anteriormente</td>
				<td><span>1</span><input type="radio" value="1" name="13"></td>
				<td><span>2</span><input type="radio" value="2" name="13"></td>
				<td><span>3</span><input type="radio" value="3" name="13"></td>
				<td><span>4</span><input type="radio" value="4" name="13"></td>
				<td><span>5</span><input type="radio" value="5" name="13"></td>
				<td><span>6</span><input type="radio" value="6" name="13"></td>
				<td><span>7</span><input type="radio" value="7" name="13"></td>
			</tr>

			<tr>
				<td>14.-Tengo autodisciplina</td>
				<td><span>1</span><input type="radio" value="1" name="14"></td>
				<td><span>2</span><input type="radio" value="2" name="14"></td>
				<td><span>3</span><input type="radio" value="3" name="14"></td>
				<td><span>4</span><input type="radio" value="4" name="14"></td>
				<td><span>5</span><input type="radio" value="5" name="14"></td>
				<td><span>6</span><input type="radio" value="6" name="14"></td>
				<td><span>7</span><input type="radio" value="7" name="14"></td>
			</tr>

			<tr>
				<td>15.-Me mantengo interesado en las cosas</td>
				<td><span>1</span><input type="radio" value="1" name="15"></td>
				<td><span>2</span><input type="radio" value="2" name="15"></td>
				<td><span>3</span><input type="radio" value="3" name="15"></td>
				<td><span>4</span><input type="radio" value="4" name="15"></td>
				<td><span>5</span><input type="radio" value="5" name="15"></td>
				<td><span>6</span><input type="radio" value="6" name="15"></td>
				<td><span>7</span><input type="radio" value="7" name="15"></td>
			</tr>

			<tr>
				<td>16.-Por lo general encuentro algo de qué reírme</td>
				<td><span>1</span><input type="radio" value="1" name="16"></td>
				<td><span>2</span><input type="radio" value="2" name="16"></td>
				<td><span>3</span><input type="radio" value="3" name="16"></td>
				<td><span>4</span><input type="radio" value="4" name="16"></td>
				<td><span>5</span><input type="radio" value="5" name="16"></td>
				<td><span>6</span><input type="radio" value="6" name="16"></td>
				<td><span>7</span><input type="radio" value="7" name="16"></td>
			</tr>

			<tr>
				<td>17.-El creer en mi mismo me permite atravesar tiempos difíciles</td>
				<td><span>1</span><input type="radio" value="1" name="17"></td>
				<td><span>2</span><input type="radio" value="2" name="17"></td>
				<td><span>3</span><input type="radio" value="3" name="17"></td>
				<td><span>4</span><input type="radio" value="4" name="17"></td>
				<td><span>5</span><input type="radio" value="5" name="17"></td>
				<td><span>6</span><input type="radio" value="6" name="17"></td>
				<td><span>7</span><input type="radio" value="7" name="17"></td>
			</tr>

			<tr>
				<td>18.-En una emergencia soy una persona en quien se puede confiar</td>
				<td><span>1</span><input type="radio" value="1" name="18"></td>
				<td><span>2</span><input type="radio" value="2" name="18"></td>
				<td><span>3</span><input type="radio" value="3" name="18"></td>
				<td><span>4</span><input type="radio" value="4" name="18"></td>
				<td><span>5</span><input type="radio" value="5" name="18"></td>
				<td><span>6</span><input type="radio" value="6" name="18"></td>
				<td><span>7</span><input type="radio" value="7" name="18"></td>
			</tr>

			<tr>
				<td>19.-Generalmente puedo ver una situación de varias maneras</td>
				<td><span>1</span><input type="radio" value="1" name="19"></td>
				<td><span>2</span><input type="radio" value="2" name="19"></td>
				<td><span>3</span><input type="radio" value="3" name="19"></td>
				<td><span>4</span><input type="radio" value="4" name="19"></td>
				<td><span>5</span><input type="radio" value="5" name="19"></td>
				<td><span>6</span><input type="radio" value="6" name="19"></td>
				<td><span>7</span><input type="radio" value="7" name="19"></td>
			</tr>

			<tr>
				<td>20.-Algunas veces me obligo a hacer cosas aunque no quiera</td>
				<td><span>1</span><input type="radio" value="1" name="20"></td>
				<td><span>2</span><input type="radio" value="2" name="20"></td>
				<td><span>3</span><input type="radio" value="3" name="20"></td>
				<td><span>4</span><input type="radio" value="4" name="20"></td>
				<td><span>5</span><input type="radio" value="5" name="20"></td>
				<td><span>6</span><input type="radio" value="6" name="20"></td>
				<td><span>7</span><input type="radio" value="7" name="20"></td>
			</tr>

			<tr>
				<td>21.-Mi vida tiene significado</td>
				<td><span>1</span><input type="radio" value="1" name="21"></td>
				<td><span>2</span><input type="radio" value="2" name="21"></td>
				<td><span>3</span><input type="radio" value="3" name="21"></td>
				<td><span>4</span><input type="radio" value="4" name="21"></td>
				<td><span>5</span><input type="radio" value="5" name="21"></td>
				<td><span>6</span><input type="radio" value="6" name="21"></td>
				<td><span>7</span><input type="radio" value="7" name="21"></td>
			</tr>

			<tr>
				<td>22.-No me lamento por las cosas por las que no puedo hacer nada</td>
				<td><span>1</span><input type="radio" value="1" name="22"></td>
				<td><span>2</span><input type="radio" value="2" name="22"></td>
				<td><span>3</span><input type="radio" value="3" name="22"></td>
				<td><span>4</span><input type="radio" value="4" name="22"></td>
				<td><span>5</span><input type="radio" value="5" name="22"></td>
				<td><span>6</span><input type="radio" value="6" name="22"></td>
				<td><span>7</span><input type="radio" value="7" name="22"></td>
			</tr>

			<tr>
				<td>23.-Cuando estoy en una situación difícil generalmente encuentro una salida</td>
				<td><span>1</span><input type="radio" value="1" name="23"></td>
				<td><span>2</span><input type="radio" value="2" name="23"></td>
				<td><span>3</span><input type="radio" value="3" name="23"></td>
				<td><span>4</span><input type="radio" value="4" name="23"></td>
				<td><span>5</span><input type="radio" value="5" name="23"></td>
				<td><span>6</span><input type="radio" value="6" name="23"></td>
				<td><span>7</span><input type="radio" value="7" name="23"></td>
			</tr>

			<tr>
				<td>24.-Tengo la energía suficiente para hacer lo que debo hacer</td>
				<td><span>1</span><input type="radio" value="1" name="24"></td>
				<td><span>2</span><input type="radio" value="2" name="24"></td>
				<td><span>3</span><input type="radio" value="3" name="24"></td>
				<td><span>4</span><input type="radio" value="4" name="24"></td>
				<td><span>5</span><input type="radio" value="5" name="24"></td>
				<td><span>6</span><input type="radio" value="6" name="24"></td>
				<td><span>7</span><input type="radio" value="7" name="24"></td>
			</tr>

			<tr>
				<td>25.-Acepto que hay personas a las que yo no les agrado</td>
				<td><span>1</span><input type="radio" value="1" name="25"></td>
				<td><span>2</span><input type="radio" value="2" name="25"></td>
				<td><span>3</span><input type="radio" value="3" name="25"></td>
				<td><span>4</span><input type="radio" value="4" name="25"></td>
				<td><span>5</span><input type="radio" value="5" name="25"></td>
				<td><span>6</span><input type="radio" value="6" name="25"></td>
				<td><span>7</span><input type="radio" value="7" name="25"></td>
			</tr>

			<tr>
				<td colspan="6"></td>
				<td colspan="2">
					<!--<input type="submit"class="btn btn-primary" name="Enviar">-->
					<button type="button" class="btn btn-primary" name="Enviar" onclick="valida()">Enviar</button>
				</td>
			</tr>

		</tbody>
	</table>
	</form>	
	</div>	
	
</div>
</div>	
	
</div>	
   	
 @stop
