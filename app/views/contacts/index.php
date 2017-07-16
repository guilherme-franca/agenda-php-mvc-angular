<div class="div-h1">
	<h1>Lista de Contatos</h1>
</div>

<div class="container-form ">
	<form autocomplete="off" name="form_contacts" action="" method="post" enctype="multipart/data-from" class="form-contacts ui form">
		<input type="text"   name="code"       placeholder="Código" class="margin-input">
		<input type="text"   name="name"       placeholder="Nome"   class="margin-input">
		<input type="email"  name="email"      placeholder="E-mail" class="margin-input">
		<div class="field container-input-file">
		    <div class="ui action input">
		        <input type="text" id="_attachmentName" readonly placeholder="Foto">
		        <label for="attachmentName" class="ui icon button btn-file">
		             <i class="plus basic icon"></i>
		             <input type="file" id="attachmentName" name="photo" style="display: none">
		        </label>
		    </div>
		</div>  
		<input type="text"  name="phone"      placeholder="Telefone"  class="margin-input">
		<input type="text"  name="cell_phone" placeholder="Celular">
		<div class="buttons">
			<button type="submit" id="btn_save" class="ui primary button"><i class="check icon"></i>Salvar</button>
			<button type="reset"  id="btn_reset" class="ui button">Limpar</button>
		</div>
	</form>
</div>



<div class="ui grid">
	<div class="two wide column">

		<div class="ui icon vertical right floated buttons">
		    <button id="btn_new"  class="ui green button" title="Novo"><i class="large plus middle aligned icon"></i></button>
		    <button id="btn_view" class="ui olive button" title="Ver"><i class="large unhide middle aligned icon"></i></button>
		    <button id="btn_edit" class="ui blue button"  title="Editar"><i class="large edit middle aligned icon"></i></button>
		    <button id="btn_del"  class="ui red button"   title="Excluir"><i class="large trash middle aligned icon"></i></button>
		</div>
		
	</div>
	<div class="fourteen wide column" style="padding-right: 30px">

	    <div class="ui fluid category search block">
		    <div class="ui icon input content-field">
		        <input class="prompt field-search" type="text" placeholder="Search...">
		        <i class="search icon"></i>
		    </div>
		</div>
		<table class="ui table">
			<thead>
				<tr>
					<th>Código</th>
					<th>Nome</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Gui</td>
				</tr>
				<tr>
					<td>2</td>
					<td>T1</td>
				</tr>
				<tr>
					<td>3</td>
					<td>T3</td>
				</tr>
			</tbody>
		</table>

	</div>
</div>
