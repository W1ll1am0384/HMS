<style type="text/css">
  .form-horizontal .form-group {
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: 0;
}
</style>
<div class="col-lg-12">
<legend>QUERATOMETRIA</legend>

     <div class="form-group">
                <label for="descripcion1" class="col-lg-6 control-label">OJO DERECHO</label>
                <div class="col-lg-6">
                  <textarea name="Revision['examen_queratometria_derecho']" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
               </div> 
              
     <div class="form-group">
                <label for="descripcion1" class="col-lg-6 control-label">OJO IZQUIERDO</label>
                <div class="col-lg-6">
                  <textarea name="revision[PATOLOGICOS]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
              </div>

<div class="col-lg-12">
<legend>EXTERNO ORBITAS Y PARPADOS</legend>
</div>

     <div class="form-group">
                <label for="descripcion1" class="col-lg-6 control-label">OJO DERECHO</label>
                <div class="col-lg-6">
                  <textarea name="revision['examen_orbita_derecho']" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
               </div> 
              
     <div class="form-group">
                <label for="descripcion1" class="col-lg-6 control-label">OJO IZQUIERDO</label>
                <div class="col-lg-6">
                  <textarea name="revision['examen_orbita_izquierdo']" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
              </div>

<div class="col-lg-12">
<legend>VIA LAGRIMAL</legend>
</div>

     <div class="form-group">
                <label for="descripcion1" class="col-lg-6 control-label">OJO DERECHO</label>
                <div class="col-lg-6">
                  <textarea name="revision[examen_lagrimal_derecho]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
               </div> 
              
     <div class="form-group">
                <label for="descripcion1" class="col-lg-6 control-label">OJO IZQUIERDO</label>
                <div class="col-lg-6">
                  <textarea name="revision[examen_lagrimal_izquierdo]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
              </div>
<div class="col-lg-12">
<legend>BIOMICROSCOPIA</legend>
</div>

     <div class="form-group">
                <label for="descripcion1" class="col-lg-6 control-label">OJO DERECHO</label>
                <div class="col-lg-6">
                  <textarea name="revision[examen_biomicroscopia_derecho]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
               </div> 
              
     <div class="form-group">
                <label for="descripcion1" class="col-lg-6 control-label">OJO IZQUIERDO</label>
                <div class="col-lg-6">
                  <textarea name="revision[examen_biomicroscopia_izquierdo]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
              </div>
<div class="col-lg-12">
<legend>CRISTALINO</legend>
</div>

     <div class="form-group">
                <label for="descripcion1" class="col-lg-6 control-label">OJO DERECHO</label>
                <div class="col-lg-6">
                  <textarea name="revision[examen_cristalino_derecho]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
               </div> 
              
     <div class="form-group">
                <label for="descripcion1" class="col-lg-6 control-label">OJO IZQUIERDO</label>
                <div class="col-lg-6">
                  <textarea name="revision[examen_cristalino_izquierdo]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
              </div>

<div class="col-lg-12">
<legend>GONIO</legend>
</div>

     <div class="form-group">
                <label for="descripcion1" class="col-lg-6 control-label">OJO DERECHO</label>
                <div class="col-lg-6">
                  <textarea name="revision[examen_gonio_derecho]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
               </div> 
              
     <div class="form-group">
                <label for="descripcion1" class="col-lg-6 control-label">OJO IZQUIERDO</label>
                <div class="col-lg-6">
                  <textarea name="revision[examen_gonio_izquierdo]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
              </div>
<div class="col-lg-12">
<legend>PIO</legend>
</div>

     <div class="form-group">
                <label for="descripcion1" class="col-lg-6 control-label">OJO DERECHO</label>
                <div class="col-lg-6">
                  <textarea name="revision[examen_pio_derecho]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
               </div> 
              
     <div class="form-group">
                <label for="descripcion1" class="col-lg-6 control-label">OJO IZQUIERDO</label>
                <div class="col-lg-6">
                  <textarea name="revision[examen_pio_izquierdo]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
              </div>
<div class="col-lg-12">
<legend>FONDO DE OJO</legend>
</div>

<div class="col-lg-3">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"revision['examen_fondo_dilatado']","valor"=>"SI","actual"=>$datconsulta->emergencia_t66),true)?>
                  <label for="emergencia" class="control-label">DILATADO</label>
                </div>
              
<div class="col-lg-3">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"revision['examen_no_fondo_dilatado']","valor"=>"SI","actual"=>$datconsulta->emergencia_t66),true)?>
                  <label for="emergencia" class="control-label">NO DILATADO</label>
                </div>
              </div> 

     <div class="form-group">
                <label for="descripcion1" class="col-lg-6 control-label">OJO DERECHO</label>
                <div class="col-lg-6">
                  <textarea name="revision['examen_fondo_derecho']" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
               </div> 
              
     <div class="form-group">
                <label for="descripcion1" class="col-lg-6 control-label">OJO IZQUIERDO</label>
                <div class="col-lg-6">
                  <textarea name="revision['examen_fondo_izquierdo']" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
              </div>
