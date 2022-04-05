<? class Contact_form{
    private $id;
    private $mail;
    private $name;
    private $subject;
    private $content;
    private $date;
    
    public function __construct($id, $mail, $name, $subject, $content, $date)
    {
        $this->id = $id;
        $this->mail = $mail;
        $this->name = $name;
        $this->subject = $subject;
        $this->content = $content;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->author = $mail;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->author = $name;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->author = $subject;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->author = $content;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->author = $date;
    }
}


