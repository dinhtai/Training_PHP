<?php

/**
 * @link(Database, https://codeigniter.com/user_guide/database/results.html)
 */
class Node extends Model
{

    /**
     * Get a node data
     * @param  [type] $filter [description]
     * @return [type]         [description]
     */
    public function getNode($id)
    {
        $this->table('articles');
        return $this->get(['id' => $id]);
    }

    /**
     * Get list nodes
     * @param  [type] $filter [description]
     * @return [type]         [description]
     */
    public function getNodes($filter = [], $limit = 50, $offset = 0)
    {
        $nodes = array();

        if (empty($filter)) {
            $filter = ['status' => 1];
        }

        $query = $this->db->where($filter);
        $query = $this->db->order_by('created DESC');
        $query = $this->db->get('articles', $limit, $offset);

        foreach ($query->result() as $row) {
            $row->teaser = mb_substr($row->content, 0, 400) . '...';
            $row->link = 'post/' . $row->id;
            $nodes[$row->id] = $row;
        }

        return $nodes;
    }

    /**
     * Get a node relation posts
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getRelations($id)
    {

    }
}
