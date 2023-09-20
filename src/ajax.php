<?php

class Controller{
    public function destroyNode($id){
        $nodes_ids = Node::where('pid', $id);
        foreach($nodes_ids as $node_id){
            Node::delete($id);
       }
    }

}
