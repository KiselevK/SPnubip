namespace SpNubip.Models
{
    using System;
    using System.Collections.Generic;
    using System.ComponentModel.DataAnnotations;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Data.Entity.Spatial;

    public class DataForIndexLayout
    {
        public IEnumerable<News> news;
        public IEnumerable<Project> project;


    }
}