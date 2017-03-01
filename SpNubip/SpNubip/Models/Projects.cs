namespace SpNubip.Models
{
    using System;
    using System.Collections.Generic;
    using System.ComponentModel.DataAnnotations;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Data.Entity.Spatial;

    public partial class Projects
    {
        [Key]
        public Guid Id_Project { get; set; }

        [Required]
        public string Name_Projects { get; set; }

       
        [Required]
        public string Short_Description { get; set; }

        
        [Required]
        public string Full_Description { get; set; }

        [Required]
        public string Tag_Projects { get; set; }
        [Required]
        public string Author { get; set; }
    }
}