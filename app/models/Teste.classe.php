<?php

    class Teste extends ModelBase
    {
    	public function initialize()
    	{
    		parent::initialize();
    		$this->set_properties
    		([
                'id' => [],
                'titulo' => [ 'label' => 'Título', 'list' => true ],
                'descricao' => [],
                'ref' => [ 'list' => true ],
                'investimento' => [ 'type' => 'int' ],
    			'descricao' => [ 'label' => 'Descrição', 'type' => 'text' ]
			]);

    	}
    }