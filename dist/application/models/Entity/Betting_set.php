<?php

namespace Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @table(name="bettingset")
 */
class Betting_set {

    /**
    * @Id
    * @Column(type="integer", name="id")
    * @GeneratedValue
    */
    private $id;

    /**
     * @OneToOne(targetEntity="Bettor")
     * @JoinColumn(name="creator_id", referencedColumnName="id")
     */
    private $creator;

    /**
     * @OneToMany(targetEntity="Bet", mappedBy="bettingset", cascade={ "persist" })
     * @JoinTable(name="bets",
     *      joinColumns={@JoinColumn(name="set_id", referencedColumnName="id")}
     * )
     */
    private $bets;

    /**
     * @OneToOne(targetEntity="Round")
     * @JoinColumn(name="round_id", referencedColumnName="id")
     */
    private $round;

    /**
     * Regra de pontuação - Acertar o placar
     * @Column(type="integer", name="rule_ap")
     */
    private $rule_ap;

    /**
     * Regra de pontuação - Acertar os gols do vencedor
     * @Column(type="integer", name="rule_gv")
     */
    private $rule_gv;

    /**
     * Regra de pontuação - Acertar o saldo de gols
     * @Column(type="integer", name="rule_sg")
     */
    private $rule_sg;

    /**
     * Regra de pontuação - Acertar os gols do perdedor
     * @Column(type="integer", name="rule_gp")
     */
    private $rule_gp;

    /**
     * Regra de pontuação - Acertar o vencedor
     * @Column(type="integer", name="rule_av")
     */
    private $rule_av;

    /**
     * Get the value of id
     * 
     * @return  int
     */ 
    public function get_id()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function set_id($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of creator
     * 
     * @return  Bettor
     */ 
    public function get_creator()
    {
        return $this->creator;
    }

    /**
     * Set the value of creator
     *
     * @return  self
     */ 
    public function set_creator(Entity\Bettor $creator)
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * Get the value of bets
     * 
     * @return  ArrayCollection
     */ 
    public function get_bets()
    {
        return $this->bets;
    }

    /**
     * Set the value of bets
     *
     * @return  self
     */ 
    public function set_bets(ArrayCollection $bets)
    {
        $this->bets = $bets;

        return $this;
    }

    /**
     * Get the value of round
     * 
     * @return  Round
     */ 
    public function get_round()
    {
        return $this->round;
    }

    /**
     * Set the value of round
     *
     * @return  self
     */ 
    public function set_round(Round $round)
    {
        $this->round = $round;

        return $this;
    }

    /**
     * Get regra de pontuação - Acertar o placar
     */ 
    public function get_rule_ap()
    {
        return $this->rule_ap;
    }

    /**
     * Set regra de pontuação - Acertar o placar
     *
     * @return  self
     */ 
    public function set_rule_ap($rule_ap)
    {
        $this->rule_ap = $rule_ap;

        return $this;
    }

    /**
     * Get regra de pontuação - Acertar os gols do vencedor
     */ 
    public function get_rule_gv()
    {
        return $this->rule_gv;
    }

    /**
     * Set regra de pontuação - Acertar os gols do vencedor
     *
     * @return  self
     */ 
    public function set_rule_gv($rule_gv)
    {
        $this->rule_gv = $rule_gv;

        return $this;
    }

    /**
     * Get regra de pontuação - Acertar o saldo de gols
     */ 
    public function get_rule_sg()
    {
        return $this->rule_sg;
    }

    /**
     * Set regra de pontuação - Acertar o saldo de gols
     *
     * @return  self
     */ 
    public function set_rule_sg($rule_sg)
    {
        $this->rule_sg = $rule_sg;

        return $this;
    }

    /**
     * Get regra de pontuação - Acertar os gols do perdedor
     */ 
    public function get_rule_gp()
    {
        return $this->rule_gp;
    }

    /**
     * Set regra de pontuação - Acertar os gols do perdedor
     *
     * @return  self
     */ 
    public function set_rule_gp($rule_gp)
    {
        $this->rule_gp = $rule_gp;

        return $this;
    }

    /**
     * Get regra de pontuação - Acertar o vencedor
     */ 
    public function get_rule_av()
    {
        return $this->rule_av;
    }

    /**
     * Set regra de pontuação - Acertar o vencedor
     *
     * @return  self
     */ 
    public function set_rule_av($rule_av)
    {
        $this->rule_av = $rule_av;

        return $this;
    } 

}
