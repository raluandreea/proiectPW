namespace My_Photographer.Models
{
    using System;
    using System.Collections.Generic;
    using System.ComponentModel.DataAnnotations;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Data.Entity.Spatial;

    public partial class Fotograf_Photo
    {
        public int ID { get; set; }

        public int IDfotograf { get; set; }

        public int IDphoto { get; set; }

        public virtual Fotograf Fotograf { get; set; }

        public virtual Photos Photos { get; set; }
    }
}
