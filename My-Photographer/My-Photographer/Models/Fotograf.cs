namespace My_Photographer.Models
{
    using System;
    using System.Collections.Generic;
    using System.ComponentModel.DataAnnotations;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Data.Entity.Spatial;

    [Table("Fotograf")]
    public partial class Fotograf
    {
        [System.Diagnostics.CodeAnalysis.SuppressMessage("Microsoft.Usage", "CA2214:DoNotCallOverridableMethodsInConstructors")]
        public Fotograf()
        {
            Fotograf_Photo = new HashSet<Fotograf_Photo>();
            User_Fotograf_Photo = new HashSet<User_Fotograf_Photo>();
        }

        public int ID { get; set; }

        [Required]
        [StringLength(50)]
        public string Telefon { get; set; }

        [Required]
        public string Photo { get; set; }

        public int IDregister { get; set; }

        [System.Diagnostics.CodeAnalysis.SuppressMessage("Microsoft.Usage", "CA2227:CollectionPropertiesShouldBeReadOnly")]
        public virtual ICollection<Fotograf_Photo> Fotograf_Photo { get; set; }

        public virtual Register Register { get; set; }

        [System.Diagnostics.CodeAnalysis.SuppressMessage("Microsoft.Usage", "CA2227:CollectionPropertiesShouldBeReadOnly")]
        public virtual ICollection<User_Fotograf_Photo> User_Fotograf_Photo { get; set; }
    }
}
