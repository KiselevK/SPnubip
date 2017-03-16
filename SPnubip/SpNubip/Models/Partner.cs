namespace SpNubip.Models
{
    using System;
    using System.Collections.Generic;
    using System.ComponentModel.DataAnnotations;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Data.Entity.Spatial;

    public partial class Partner
    {
        [Key]
        public Guid Id_Partners { get; set; }

        [Required]
        public string Name_Partners { get; set; }

        public string Description { get; set; }

        public string Type_Partners { get; set; }

        public string Img_Partners { get; set; }
    }
}
