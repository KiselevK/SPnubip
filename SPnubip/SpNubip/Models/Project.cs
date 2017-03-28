namespace SpNubip.Models
{
    using System;
    using System.Collections.Generic;
    using System.ComponentModel.DataAnnotations;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Data.Entity.Spatial;

    public partial class Project
    {
        [Key]
        public Guid Id_Project { get; set; }

        [Required]
        public string Title { get; set; }

        [Required]
        public string Creator { get; set; }

        [Required]
        public string Description { get; set; }

        [Required]
        public string Areas_of_application { get; set; }

        [Required]
        public string Efficiency { get; set; }

        [Required]
        public string View { get; set; }

        public Guid Id_Img { get; set; }

        public Guid Id_Category { get; set; }

        [Required]
        public string Pulpit { get; set; }

        public virtual Category Category { get; set; }

        public virtual Img Img { get; set; }
    }
}
