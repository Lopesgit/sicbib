<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    echo link_tag('assets/css/funcionalidades.css');
    echo link_tag('assets/css/buttons.css');
    echo link_tag('assets/css/datatable_page.css');
    echo link_tag('assets/css/datatable_table.css');
    echo link_tag('assets/css/jquery.tooltip.css');
?>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url().'libraries/jquery.js'; ?>"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url().'assets/js/funcionalidades.js'; ?>"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url().'assets/js/jquery.dataTables.js'; ?>"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url().'assets/js/jquery.tooltip.js'; ?>"></script>  
    <!--<img id="top" src="<?php echo base_url().'assets/img/top.png'; ?>" alt="">-->
    <div id="form_container">
        <form id="form_698867" class="appnitro"  method="post" action="">
            <div class="form_description">
                <h2>Cadastro de Funcionalidades</h2>
                <p>Permite inserir novas funcionalidades no menu principal do sistema.</p>
            </div>
            <div class="div-left">
                <ul >
                    <li id="li_1" >
                        <label class="description" for="element_1">Nome da Funcionalidade </label>
                        <div>
                            <input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value=""/> 
                        </div> 
                    </li>		
                    <li id="li_2" >
                         <label class="description" for="element_2">Nível no Menu Principal </label>
                         <div>
                             <select class="element select medium" id="element_2" name="element_2"> 
                                     <option value="1" selected="selected">Menu</option>
                                     <option value="2" >Submenu Nível 1</option>
                                     <option value="3" >Submenu Nivel 2</option>
                             </select>
                         </div> 
                    </li>		
                    <li id="li_3" >
                        <label class="description label-invisible" for="element_3">Menus </label>
                        <div>
                            <select class="element select medium" id="element_3" name="element_3"> 
                                <option value="1" selected="selected">Nenhum</option>
                            </select>
                        </div> 
                    </li>		
                    <li id="li_4" >
                        <label class="description label-invisible" for="element_4">Submenu Nível 1 </label>
                        <div>
                            <select class="element select medium" id="element_4" name="element_4"> 
                                    <option value="1" selected="selected">Nenhum</option>
                            </select>
                        </div> 
                    </li>
                    <li class="buttons">
                        <input id="saveForm" class="button" type="submit" name="submit" value="Salvar" />
                        <input id="clearForm" class="button-clean" type="reset" name="clear" value="Limpar" />
                    </li>
                </ul>
            </div>           
        </form>
        <div id="demo" class="div-right">
                <table id="tb_func" class="display" cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th>Funcionalidade</th>
                            <th>Nível Menu Principal</th>
                            <th>Menu</th>
                            <th>Submenu nível 1</th>
                            <th>Submenu nível 1</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeC">
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                            <td>Row 1 Data 3</td>
                            <td>Row 1 Data 4</td>
                            <td>Row 1 Data 5</td>
                            <td>6</td>
                        </tr>
                        <tr class="gradeC">
                            <td>Row 2 Data 1</td>
                            <td>Row 2 Data 2</td>
                            <td>Row 2 Data 3</td>
                            <td>Row 2 Data 4</td>
                            <td>Row 2 Data 5</td>
                            <td></td>
                        </tr>
                        <tr class="gradeC">
                            <td>Row 2 Data 1</td>
                            <td>Row 2 Data 2</td>
                            <td>Row 2 Data 3</td>
                            <td>Row 2 Data 4</td>
                            <td>Row 2 Data 5</td>
                            <td></td>
                        </tr>
                        <tr class="gradeC">
                            <td>Row 2 Data 1</td>
                            <td>Row 2 Data 2</td>
                            <td>Row 2 Data 3</td>
                            <td>Row 2 Data 4</td>
                            <td>Row 2 Data 5</td>
                            <td></td>
                        </tr>
                        <tr class="gradeC">
                            <td>Row 2 Data 1</td>
                            <td>Row 2 Data 2</td>
                            <td>Row 2 Data 3</td>
                            <td>Row 2 Data 4</td>
                            <td>Row 2 Data 5</td>
                            <td></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Funcionalidade</th>
                            <th>Nível Menu Principal</th>
                            <th>Menu</th>
                            <th>Submenu nível 1</th>
                            <th>Submenu nível 1</th>
                            <th>Ação</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
	</div>
        </div>         
	<img id="bottom" src="<?php echo base_url().'assets/img/bottom.png'; ?>" alt="">
