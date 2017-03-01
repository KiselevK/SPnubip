namespace SpNubip.Models
{
    using System;
    using System.Data.Entity;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Linq;

    public partial class BD : DbContext
    {
        public BD()
            : base("name=BD")
        {
        }

        public virtual DbSet<News> News { get; set; }
        public virtual DbSet<Partner> Partners { get; set; }
        public virtual DbSet<Projects> Projects { get; set; }

        //protected override void OnModelCreating(DbModelBuilder modelBuilder)
        //{
        //    modelBuilder.Entity<News>()
        //        .Property(e => e.Title)
        //        .IsUnicode(false);

        //    modelBuilder.Entity<News>()
        //        .Property(e => e.NewText)
        //        .IsUnicode(false);

        //    modelBuilder.Entity<News>()
        //        .Property(e => e.Img)
        //        .IsUnicode(false);


        //}

    }
}
