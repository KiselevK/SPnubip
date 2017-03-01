namespace SpNubip.Models
{
    using System;
    using System.Collections.Generic;
    using System.ComponentModel.DataAnnotations;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Data.Entity.Spatial;

    public partial class News
    {
        [Key]
        public Guid ID_News { get; set; }

        [Required]
        public string Title { get; set; }

        [Column("News")]
        [Required]
        public string NewText { get; set; }

        [Column(TypeName = "date")]
        public DateTime DateNews { get; set; }

        [Required]
        public string Img { get; set; }
    }
}
