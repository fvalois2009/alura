<?php

add_action('widgets_init', 'al_pat_pal_registra_widget');

function al_pat_pal_registra_widget(){
    register_widget('PatrocinadoresAlura');
}


class PatrocinadoresAlura extends WP_Widget
{

      public function __construct()
    {
        parent::__construct(
            'al_patrocinadores_palestras_widget',
            __('Patrocinadores Palestras', 'al_patrocinadores_palestras_widget'),
            array('description' => __('Selecione os patronicidadores da palestra','al_patrocinadores_palestras_widget'),)
        );
    }


    /**
     * @param array $instance
     * @return string|void
     */
    public function form($instance)
    {
?>
        <p>
            <input type="checkbox" id="<?= $this->get_field_id(field_name: 'caelum') ?>" name="<?= $this->get_field_name(field_name: 'caelum') ?>"
                   value="1" <?php checked('1', $instance['caelum'])?> >
            <label for="<?= $this->get_field_id(field_name: 'caelum') ?>">Caelum</label>

        </p>
        <p>
            <input type="checkbox" id="<?= $this->get_field_id(field_name: 'casa_do_codigo') ?>" name="<?= $this->get_field_name(field_name: 'casa_do_codigo') ?>"
                   value="1" <?php checked('1', $instance['casa_do_codigo'])?> >
            <label for="<?= $this->get_field_id(field_name: 'casa_do_codigo') ?>">Casa do Código</label>

        </p>
        <p>
            <input type="checkbox" id="<?= $this->get_field_id(field_name: 'Hipsters') ?>" name="<?= $this->get_field_name(field_name: 'Hipsters') ?>"
                   value="1" <?php checked('1', $instance['Hipsters'])?> >
            <label for="<?= $this->get_field_id(field_name: 'Hipsters') ?>">Hipsters</label>

        </p>
<?php
    }

   public function update($new_instance, $old_instance)
   {
       $instance = array();
       $instance['caelum'] = !empty($new_instance['caelum']) ? strip_tags($new_instance['caelum']): '';
       $instance['casa_do_codigo'] = !empty($new_instance['casa_do_codigo']) ? strip_tags($new_instance['casa_do_codigo']): '';
       $instance['Hipsters'] = !empty($new_instance['Hipsters']) ? strip_tags($new_instance['Hipsters']): '';
       return $instance;
   }


    public function widget($args, $instance){
        ?>
            <section class="patrocinadores-principais">
                <h3 class="titulo-patrocinadores">Patrocinadores</h3>
                <ul class="lista-patrocinadores">
                    <?php if(!empty($instance['caelum'])): ?>
                        <li><img src="<?= plugin_dir_url(__FILE__) .'../images/caelum.svg' ?>"></li>
                    <?php endif; ?>
                    <?php if(!empty($instance['casa_do_codigo'])): ?>
                        <li><img src="<?= plugin_dir_url(__FILE__) .'../images/cdc.svg' ?>"></li>
                    <?php endif; ?>
                    <?php if(!empty($instance['Hipsters'])): ?>
                        <li><img src="<?= plugin_dir_url(__FILE__) .'../images/hipsters.svg' ?>"></li>
                    <?php endif; ?>
                </ul>
            </section>
        <?php
    }
}
