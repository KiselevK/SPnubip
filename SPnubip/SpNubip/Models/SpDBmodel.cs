namespace SpNubip.Models
{
    using System;
    using System.Data.Entity;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Linq;

    public partial class SpDBmodel : DbContext
    {
        public SpDBmodel()
            : base("name=SpDBmodel1")
        {
        }

        public virtual DbSet<Category> Categories { get; set; }
        public virtual DbSet<Img> Imgs { get; set; }
        public virtual DbSet<News> News { get; set; }
        public virtual DbSet<Partner> Partners { get; set; }
        public virtual DbSet<Project> Projects { get; set; }

        protected override void OnModelCreating(DbModelBuilder modelBuilder)
        {
            modelBuilder.Entity<Category>()
                .HasMany(e => e.Projects)
                .WithRequired(e => e.Category)
                .WillCascadeOnDelete(false);

            modelBuilder.Entity<Img>()
                .HasMany(e => e.Projects)
                .WithRequired(e => e.Img)
                .WillCascadeOnDelete(false);
        }
    }
}
