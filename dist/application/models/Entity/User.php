<?php

namespace Entity;

/**
 * @Entity
 * @table(name="users")
 */
class User {

    /**
     * Código de identificação do usuário.
     * @Id
     * @Column(type="integer", name="id")
     * @GeneratedValue
     */
    protected $id;

    /**
     * Nível de permissão do usuário, utilizado para diferenciar
     * usuários comuns dos administradores do sistema.
     * @Column(name="access_level")
     */
    protected $access_level;

    /**
     * Status da conta.
     * 0 = normal
     * 1 = pendente de confirmação
     * 2 = banido
     * @Column(name="state")
     * @since   1.0.0
     */
    protected $state;

    /**
     * Nome do usuário.
     * @Column(name="name")
     * @since   1.0.0
     */
    protected $name;

    /**
     * Endereço de e-mail do usuário.
     * @Column(name="email")
     * @since   1.0.0
     */
    protected $email;

    /**
     * Senha do usuário.
     * @Column(name="password")
     * @since   1.0.0
     */
    protected $password;

    /**
     * Último login realizado pelo usuário.
     * @Column(name="last_login", type="datetime", nullable=TRUE)
     * @since   1.0.0
     */
    protected $last_login;

    /**
     * Último endereço de IP utilizado pelo o usuário
     * para acessar a conta.
     * @Column(name="last_ip", nullable=TRUE)
     * @since   1.0.0
     */
    protected $last_ip;
    
    /**
     * Regra de pontuação - Acertar o placar
     * @Column(type="integer", name="points_ap", nullable=TRUE)
     */
    private $points_ap;

    /**
     * Regra de pontuação - Acertar os gols do vencedor
     * @Column(type="integer", name="points_gv", nullable=TRUE)
     */
    private $points_gv;

    /**
     * Regra de pontuação - Acertar o saldo de gols
     * @Column(type="integer", name="points_sg", nullable=TRUE)
     */
    private $points_sg;

    /**
     * Regra de pontuação - Acertar os gols do perdedor
     * @Column(type="integer", name="points_gp", nullable=TRUE)
     */
    private $points_gp;

    /**
     * Regra de pontuação - Acertar o vencedor
     * @Column(type="integer", name="points_av", nullable=TRUE)
     */
    private $points_av;

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
    private function set_id($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of access_level
     */ 
    public function get_access_level()
    {
        return $this->access_level;
    }

    /**
     * Set the value of access_level
     *
     * @return  self
     */ 
    public function set_access_level($access_level)
    {
        $this->access_level = $access_level;

        return $this;
    }

    /**
     * Get the value of state
     */ 
    public function get_state()
    {
        return $this->state;
    }

    /**
     * Set the value of state
     *
     * @return  self
     */ 
    public function set_state($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get the value of name
     * 
     * @return  string
     */ 
    public function get_name()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function set_name($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of email
     * 
     * @return  string
     */ 
    public function get_email()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function set_email($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     * 
     * @return  string
     */ 
    public function get_password()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function set_password($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of last_login
     */ 
    public function get_last_login()
    {
        return $this->last_login;
    }

    /**
     * Set the value of last_login
     *
     * @return  self
     */ 
    public function set_last_login($last_login)
    {
        $this->last_login = $last_login;

        return $this;
    }

    /**
     * Get the value of last_ip
     */ 
    public function get_last_ip()
    {
        return $this->last_ip;
    }

    /**
     * Set the value of last_ip
     *
     * @return  self
     */ 
    public function set_last_ip($last_ip)
    {
        $this->last_ip = $last_ip;

        return $this;
    }

    /**
     * Get regra de pontuação - Acertar o placar
     */ 
    public function get_points_ap()
    {
        return $this->points_ap;
    }

    /**
     * Set regra de pontuação - Acertar o placar
     *
     * @return  self
     */ 
    public function set_points_ap($points_ap)
    {
        $this->points_ap = $points_ap;

        return $this;
    }

    /**
     * Get regra de pontuação - Acertar os gols do vencedor
     */ 
    public function get_points_gv()
    {
        return $this->points_gv;
    }

    /**
     * Set regra de pontuação - Acertar os gols do vencedor
     *
     * @return  self
     */ 
    public function set_points_gv($points_gv)
    {
        $this->points_gv = $points_gv;

        return $this;
    }

    /**
     * Get regra de pontuação - Acertar o saldo de gols
     */ 
    public function get_points_sg()
    {
        return $this->points_sg;
    }

    /**
     * Set regra de pontuação - Acertar o saldo de gols
     *
     * @return  self
     */ 
    public function set_points_sg($points_sg)
    {
        $this->points_sg = $points_sg;

        return $this;
    }

    /**
     * Get regra de pontuação - Acertar os gols do perdedor
     */ 
    public function get_points_gp()
    {
        return $this->points_gp;
    }

    /**
     * Set regra de pontuação - Acertar os gols do perdedor
     *
     * @return  self
     */ 
    public function set_points_gp($points_gp)
    {
        $this->points_gp = $points_gp;

        return $this;
    }

    /**
     * Get regra de pontuação - Acertar o vencedor
     */ 
    public function get_points_av()
    {
        return $this->points_av;
    }

    /**
     * Set regra de pontuação - Acertar o vencedor
     *
     * @return  self
     */ 
    public function set_points_av($points_av)
    {
        $this->points_av = $points_av;

        return $this;
    }

}
