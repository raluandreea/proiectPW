namespace My_Photographer.Models
{
    using System;
    using System.Collections.Generic;
    using System.ComponentModel.DataAnnotations;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Data.Entity.Spatial;

    public partial class User_Fotograf_Photo
    {
        public int ID { get; set; }

        public int IDrate { get; set; }

        public int IDfotograf { get; set; }

        public virtual Fotograf Fotograf { get; set; }

        public virtual Rate Rate { get; set; }
    }
}
